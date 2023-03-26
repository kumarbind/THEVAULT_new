<?php

namespace App\Http\Controllers;

use App\Models\Propertie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Developer;
use App\Models\User;
use App\Models\File; 
use Illuminate\Support\Facades\Validator;

class DeveloperController extends Controller
{
    public function index(Request $request)
    {
        $users = Developer::all();
        return view('admin.addDeveloper_test', compact('users'));
    }

    public function store(Request $request)
    {
        
        $developers = new Developer;
        $validator = Validator::make($request->all(), [
            'files' => 'max:10120', //5MB 
        ]);
        
        $developers = new Developer;

        $amenitiesIcon_name = array();
        $developers->developerName = $request->developerName;
        $developers->description = $request->description;
        $developers->file =  json_encode($amenitiesIcon_name);
        $developers->type = "jpg";
        $developers->save();
        
        $deve = Developer::where('developerName', $request->developerName)->first();
            if($deve->developerName == $request->developerName)
            {
                foreach($request->files as $keys => $values)
                {
                    $imageAmenities = New File;
                    
                    if($keys == "image") {
                        foreach($values as $amenitiesimages_index => $amenitiesimages){
                            $amenitiesimages_name[] = date('YmdHi').$amenitiesimages->getClientOriginalName();
                            $amenitiesimages->move(public_path('publice/images'), date('YmdHi').$amenitiesimages->getClientOriginalName());
                        } 
                            $imageAmenities->owner_id = $deve->id;
                            $imageAmenities->photo_name = json_encode($amenitiesimages_name);
                            $imageAmenities->path = json_encode($amenitiesimages_name);
                            $imageAmenities->type = "Devbanner";
                            $imageAmenities->save();
                    }elseif($keys == "devlogo") {
                        foreach($values as $amenitiesimages_index => $amenitiesimages){
                            $amenitiesIcon_name[] = date('YmdHi').$amenitiesimages->getClientOriginalName();
                            $amenitiesimages->move(public_path('publice/images'), date('YmdHi').$amenitiesimages->getClientOriginalName());
                        } 
                        $imageAmenities->owner_id = $deve->id;
                        $imageAmenities->photo_name = json_encode($amenitiesIcon_name);
                        $imageAmenities->path = json_encode($amenitiesIcon_name);
                        $imageAmenities->type = "devlogo";
                        $imageAmenities->save();
                    }
                }
            }
        // }
        
        return view('admin.addDeveloper', ['users' =>  $users = Developer::all()]);
    }

    public function editDeveloper(Request $request)
    {
        $developers = new Developer;
        $developers->name = $request->developerName;
        $developers->email = $request->email;
        $developers->mobile = "sfdsfdsfs";
        $developers->project_int = "sdhsajkg";
        $developers->language = "Engilish";
        $developers->type = "user";
        $developers->file = $request->file ?? "N/a";
        $developers->save();
        return view('admin.addDeveloper');
    }

    public function finddeveloper($developer_name)
    {
        
        $developers = Developer::where('developerName', $developer_name)->first();
        
        $propertys = Propertie::where('developer_name', $developers->developerName)->get();
        
        foreach($propertys as $property){
            $projectImgs = File::where('type', $property->devproperty)->where('owner_id', $property->id)->get(); 
        }
        foreach($projectImgs as $projectImg){
            $project_of_developer[] = json_decode($projectImg->photo_name);
        }

        if($developers->developerName == $developer_name){
            $banner_davelopers = File::where('type', "Devbanner")->where('owner_id', $developers->id)->first();
            $banner_daveloper = json_decode($banner_davelopers->photo_name);

            $logo_davelopers = File::where('type', "devlogo")->where('owner_id', $developers->id)->first();
            $devlogo = json_decode($logo_davelopers->photo_name);
        }

        return view('developers', ['developers' =>  $developers, 'project_of_developer' => $project_of_developer, 'banner_daveloper' =>$banner_daveloper, 'devlogo' =>$devlogo]);
    }

    public function searchProperty(Request $request){
        dd($request);
        // $porpose = "Sale";
        $country = $request->city_locaion;
        $state = $request->location_sale;
        $minprice = $request->minimum;
        $maxprice = $request->maximum;
        $maxprice = $request->maximum;
        $filter_min = $request->filter_min;
        $filter_max = $request->filter_max;
        $filter_furnished = $request->filter_furnished;
        $filter_listed_by = $request->filter_listed;
        $keyword_search = $request->filter_keyword;
        $property_type = $request->porpose_filter_search;
        $porpose = $request->porpose_type_filter;
        
        // $search_property_data = Propertie::where('porpose',$property_type)
        //                                 ->orwhere('propose_type',$porpose)
        //                                 ->orwhere('location_country',$country)
        //                                 ->orwhere('location_city',$state)
        //                                 ->orwhereBetween('pricerange', [$minprice, 50,000,000])->get();
        $search_property_data = Propertie::where('porpose',$property_type)
                                        ->orwhere('propose_type',$porpose)
                                        ->orwhere('location_country',$country)
                                        ->orwhere('location_city',$state)
                                        ->orwhere('furnished',$filter_furnished)
                                        ->orwhere('listed_by',$filter_listed_by)
                                        ->orwhere('keyword_search',$keyword_search)
                                        ->orwhereBetween('pricerange', [$minprice, 50,000,000])
                                        ->orwhereBetween('pricerange', [$filter_min, $filter_max])->get();
        // dd($search_property_data);
        if($search_property_data){
            return view('search', ['search_property' => $search_property_data]);
        }
    }

    public function search(Request $request){
                $search_property_data = Propertie::all();
            return view('search', ['search_property' => $search_property_data]);
    }
    

    public function filterSearch(Request $request){
                $search_property_data = Propertie::all();
            return view('search', ['search_property' => $search_property_data]);
    }
}
