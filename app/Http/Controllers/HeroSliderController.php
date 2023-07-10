<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\BannerRequest;
use App\Http\Controllers\Controller;

use App\Banner;

class HeroSliderController extends Controller
{
    public function __construct() {
        $this->middleware('auth');

        // There is a symlink from public/img/banners -> storage/app/banners
        $this->image_dir = "banners";
        $this->image_path = storage_path(). "/app/".$this->image_dir;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$data['images'] = \File::files('img/banners/');
        $data['banners'] = Banner::with('status')->get();
        return view('banner.index', $data); 
    }

    /**
     *
     */
    public function create()
    {
        return view('banner.create');
    }

    /**
     *
     */
    public function store(BannerRequest $request)
    {
        $input = \Input::except( ['background_image', 'overlay_image'] );
        $banner = Banner::create($input);

        $this->image_helper($request, $banner);

        return redirect()->route('banner.index');
    }

    /**
     *
     */
    public function show()
    {
        $data['banner'] = Banner::findOrFail($id);
        return view('banner.show', $data);
    }

    /**
     *
     */
    public function edit( $id )
    {   
        $data['banner'] = Banner::findOrFail($id);
        return view('banner.edit', $data);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(BannerRequest $request, $id)
    {
        $banner = Banner::findOrFail($id);

        $input = \Input::except( ['background_image', 'overlay_image', 'remove_background', 'remove_overlay'] );
        $banner->update( $input );

        $this->image_helper($request, $banner);

        return redirect()->route('banner.index');
    }

    private function image_helper( Request $request, Banner $banner ) {



        // update background image
        if( $request->remove_background ) {
            dump('remove');
            unlink($this->image_path.'/'.$banner->background_image);
            $banner->background_image = null;
        }

        $img_back = $request->file('background_image');
        if ( $img_back &&  $img_back->isValid() ){

            if( !empty($banner->background_image) ) {
                unlink($this->image_path.'/'.$banner->background_image);
            }

            $imageName = 'banner-bg-'. $banner->id . '.' . $img_back->getClientOriginalExtension();
            $banner->background_image = $imageName;
            $img_back->move($this->image_path, $imageName);
        }

        // update overlay image
        if( $request->remove_overlay ) {
            unlink($this->image_path.'/'.$banner->overlay_image);
            $banner->overlay_image = null;
        }

        $img_over = $request->file('overlay_image');
        if ( $img_over &&  $img_over->isValid() ){
            
            if( !empty($banner->overlay_image) ) {
                unlink($this->image_path.'/'.$banner->overlay_image);
            }

            $imageName = 'banner-over-'. $banner->id . '.' . $img_over->getClientOriginalExtension();
            $banner->overlay_image = $imageName;
            $img_over->move($this->image_path, $imageName);
        }

        $banner->save();
    }


}
