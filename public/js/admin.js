var toolbarOptions = [
    [{ 'size': ['small', false, 'large', 'huge'] }],  // custom dropdown
    [{ 'header': [1, 2, 3, 4, 5, 6, false] }],

    ['bold', 'italic', 'underline', 'strike'],        // toggled buttons
    ['blockquote', 'link'],
    [{ 'align': [] }],

    [{ 'list': 'ordered'}, { 'list': 'bullet' }],
    [{ 'script': 'sub'}, { 'script': 'super' }],      // superscript/subscript
    [{ 'indent': '-1'}, { 'indent': '+1' }],          // outdent/indent

    [{ 'color': [] }, { 'background': [] }],          // dropdown with defaults from theme
    ["image"],
    ['clean']                                         // remove formatting button
];

Quill.register('modules/imageUploader', ImageUploader);

var quill = new Quill('#editor', {
    modules: {
        toolbar: toolbarOptions,
        imageUploader: {
            upload: file => {
                return sendUploadImage(file, urlUpload);
            }
        }
    },
    theme: 'snow'
});

quill.on('text-change', (delta, oldContents, source) => {
    if (source !== 'user') return;

    const inserted = getImgUrls(delta);
    const deleted = getImgUrls(quill.getContents().diff(oldContents));

    if (deleted.length && !deleted[0].includes('base64')) {
        sendUploadImage(deleted[0].split('/').pop(), urlDeleteUpload, true);
    }
});

function getImgUrls(delta) {
    return delta.ops.filter(i => i.insert && i.insert.image).map(i => i.insert.image);
}

function sendUploadImage(file, urlService, deleted = false) {
    return new Promise((resolve, reject) => {
        const formData = new FormData();
        formData.append("image", file);

        fetch(urlService, {
            method: "post",
            body: formData
        })
        .then(response => response.json())
        .then(result => {
            console.log(result);
            resolve(result.data.url);
        }).catch(err => {
            console.log(err);
            reject("Upload failed");
        });
    });
}

var form = document.getElementById('formBlog');
form.onsubmit = function(e) {
    document.getElementById('info').value = quill.root.innerHTML;
    document.getElementById('info_quill').value = JSON.stringify(quill.getContents());
}
