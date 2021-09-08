<?php
namespace App\Repositories;

use App\Page;
use Illuminate\Support\Facades\File;

class PageRepo extends Page
{
    private $page;

    public function __construct(Page $page) {
        $this->page = $page;
    }

    public function getAll($fields)
    {
        return $this->page->all($fields);
    }

    public function getByPage(string $page, $fields = ['*'])
    {
        return $this->page->where('page', $page)->first($fields);
    }

    public function edit($page, $data, $banner, $picture, $request)
    {
        if ($banner) {
            File::delete('images/' . $page->banner);
            $bannerName = $banner->getClientOriginalName();
            $banner->move('images/', $bannerName);
            $data['banner'] = $bannerName;
        }

        if ($picture) {
            File::delete('images/' . $page->picture);
            $pictureName = $picture->getClientOriginalName();
            $picture->move('images/', $pictureName);
            $data['picture'] = $pictureName;
        }

        if ($request->file('profile_picture_1')) {
            File::delete('images/' . $page->profile_picture_1);

            $profile1 = $request->file('profile_picture_1');
            $profileName1 = $profile1->getClientOriginalName();
            $profile1->move('images/', $profileName1);
            $data['profile_picture_1'] = $profileName1;
        }

        if ($request->file('profile_picture_2')) {
            File::delete('images/' . $page->profile_picture_2);

            $profile2 = $request->file('profile_picture_2');
            $profileName2 = $profile2->getClientOriginalName();
            $profile2->move('images/', $profileName2);
            $data['profile_picture_2'] = $profileName2;
        }

        $page->fill($data);

        return $page->save();
    }
}
