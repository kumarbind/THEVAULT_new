<?php
namespace App\Http\Controllers;
use App\Models\Propertie;
use App\Models\Developer;
use App\Models\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Response;
// use Illuminate\Routing\ResponseFactory;

class PropertiesCoontroller extends Controller
{
    public function index(Request $request)
    {
        $properties = Propertie::all();
        return view('admin.addproperty_test', compact('properties'));
    }

    public function findDetails($property_name= null)
    {
        
        $properties = Propertie::where('developer_name', $property_name)->first();
        // $properties = Propertie::all();
        // dd($properties);
        
        return view('propertydetails', compact('properties'));
    }

    public function store(Request $request)
    {
        // dd($request);
        $pricerange = [$request->min, $request->max];
       
        $availabilities = $request->aval_des;
        $validator = Validator::make($request->all(), [
            'files' => 'max:50120', //5GB 
        ]);
        $dev_id = $request->developerid;
        $developers = Developer::where('id', $dev_id)->first();

        if($developers->id == $dev_id){
            $properties = new Propertie;
            $properties->developer_id = $dev_id;
            $properties->developer_name = $developers->developerName;
            $properties->property_name = $request->propertyname;
            $properties->description = $request->description;

            $properties->porpose = $request->porpose;
            $properties->pricerange = json_encode($pricerange);
            $properties->villaDescription = $request->villaDescription;
            $properties->accessibilities =  json_encode($request->accessibility);
            $properties->nearby =  json_encode($request->nearby);
            $properties->categories = json_encode($request->categories);
            $properties->bedrooms = json_encode($request->bedrooms);
            $properties->bathroom = json_encode($request->bathrooms);
            $properties->amenitiesList = json_encode($request->bathrooms);
            $properties->amenitiesNearby = json_encode($request->nearby);
            $properties->location = $request->location_one.' '.implode(" ",$request->location);
            $properties->nearby_location = json_encode($request->payment);
            $properties->availabilities = $availabilities;
            $properties->payment_plan = json_encode($request->payment);
            $properties->agent = $request->agant_one;

            $properties->bannerImg ="Banner";
            $properties->logoImg = "LOGO";
            $properties->agentsImg = "AgentImage";
            $properties->similerPrject = "similerImages";
            $properties->amenitiesImage = "Animites";
            $properties->gallaryImg = "Gallary";
            $properties->devproperty = "devproperty";
            $properties->save();
        }
        
        $proprty_save = Propertie::where('developer_id', $dev_id)->first();
        foreach($request->files as $keys => $values)
        {
            $imageAmenities = New File;

            if($keys == "amenitiesimage") {
                foreach($values as $amenitiesimages_index => $amenitiesimages){
                    $amenitiesimages_name[] = date('YmdHi').$amenitiesimages->getClientOriginalName();
                    $amenitiesimages->move(public_path('animites/images'), date('YmdHi').$amenitiesimages->getClientOriginalName());
                } 
                    $imageAmenities->owner_id = $proprty_save->id;
                    $imageAmenities->photo_name = json_encode($amenitiesimages_name);
                    $imageAmenities->path = json_encode($amenitiesimages_name);
                    $imageAmenities->type = "Animites";
                    $imageAmenities->save();
            }elseif($keys == "amenitiesIcon") {
                foreach($values as $amenitiesimages_index => $amenitiesimages){
                    $amenitiesIcon_name[] = date('YmdHi').$amenitiesimages->getClientOriginalName();
                    $amenitiesimages->move(public_path('publice/images'), date('YmdHi').$amenitiesimages->getClientOriginalName());
                } 
                $imageAmenities->owner_id = $proprty_save->id;
                $imageAmenities->photo_name = json_encode($amenitiesIcon_name);
                $imageAmenities->path = json_encode($amenitiesIcon_name);
                $imageAmenities->type = "AmenitiesIcon";
                $imageAmenities->save();
            }elseif($keys == "gallaryPhoto") {
                foreach($values as $amenitiesimages_index => $amenitiesimages){
                    $gallary_photo_name[] = date('YmdHi').$amenitiesimages->getClientOriginalName();
                    $amenitiesimages->move(public_path('publice/images'), date('YmdHi').$amenitiesimages->getClientOriginalName());
                } 
                $imageAmenities->owner_id = $proprty_save->id;
                $imageAmenities->photo_name = json_encode($gallary_photo_name);
                $imageAmenities->path = json_encode($gallary_photo_name);
                $imageAmenities->type = "Gallary";
                $imageAmenities->save();
            }elseif($keys == "bannerImag") {
                foreach($values as $amenitiesimages_index => $amenitiesimages){
                    $bannerImag_name[] = date('YmdHi').$amenitiesimages->getClientOriginalName();
                    $amenitiesimages->move(public_path('publice/images'), date('YmdHi').$amenitiesimages->getClientOriginalName());
                } 
                // dd($filename);
                $imageAmenities->owner_id = $proprty_save->id;
                $imageAmenities->photo_name = json_encode($bannerImag_name);
                $imageAmenities->path = json_encode($bannerImag_name);
                $imageAmenities->type = "Banner";
                $imageAmenities->save();
            }elseif($keys == "logoImg") {
                foreach($values as $amenitiesimages_index => $amenitiesimages){
                    $logoImg_name[] = date('YmdHi').$amenitiesimages->getClientOriginalName();
                    $amenitiesimages->move(public_path('publice/images'), date('YmdHi').$amenitiesimages->getClientOriginalName());
                }
                $imageAmenities->owner_id = $proprty_save->id;
                $imageAmenities->photo_name = json_encode($logoImg_name);
                $imageAmenities->path = json_encode($logoImg_name);
                $imageAmenities->type = "LOGO";
                $imageAmenities->save();
            }elseif($keys == "agentImg") {
                foreach($values as $amenitiesimages_index => $amenitiesimages){
                    $agentImg_name[] = date('YmdHi').$amenitiesimages->getClientOriginalName();
                    $amenitiesimages->move(public_path('publice/images'), date('YmdHi').$amenitiesimages->getClientOriginalName());
                }
                $imageAmenities->owner_id = $proprty_save->id;
                $imageAmenities->photo_name = json_encode($agentImg_name);
                $imageAmenities->path = json_encode($agentImg_name);
                $imageAmenities->type = "AgentImage";
                $imageAmenities->save();
            }elseif($keys == "developerPageProperty") {
                foreach($values as $amenitiesimages_index => $amenitiesimages){
                    $developerPageProperty_name[] = date('YmdHi').$amenitiesimages->getClientOriginalName();
                    $amenitiesimages->move(public_path('publice/images'), date('YmdHi').$amenitiesimages->getClientOriginalName());
                }
                $imageAmenities->owner_id = $proprty_save->id;
                $imageAmenities->photo_name = json_encode($developerPageProperty_name);
                $imageAmenities->path = json_encode($developerPageProperty_name);
                $imageAmenities->type = "devproperty";
                $imageAmenities->save();
            }
        }
        return view('admin.addproperty_test', ['properties' =>  $properties = Propertie::all()]); 
    }

    public function editDeveloper(Request $request)
    {
        $properties = new Propertie;
        $properties->developer_id = 1;
        $properties->developer_name = "sandip";
        $properties->property_name = $request->developerName;
        $properties->description = $request->description;
        $properties->villaDescription = $request->villaDescription;
        $properties->amenitiesList = $request->amenitiesList;
        $properties->amenitiesNearby = $request->amenitiesNearby;
        $properties->location = $request->location;
        $properties->nearby_location = "$request->location";
        $properties->availabilities = $request->availabilities;
        $properties->payment_plan = $request->paymentPlane;
        $properties->agent = $request->agants;
        $properties->save();
        return view('admin.addProperty', compact('properties'));
    }

    public function searchfilter(Request $request)
    {
        if($request->feature){
            $properties = Propertie::where('accessibilities', $request->feature)->get();
                return response()->json(['status' =>"succes",'users' => $properties]);
        }
        $properties = Propertie::where('developer_name', $request->developer)
                    ->orwhere('porpose', $request->porpose)
                    ->orwhere('propose_type', $request->porpose_type)
                    ->orwhere('pricerange', $request->pricerange)->get();
        // foreach($properties as $propertie){
                return response()->json(['status' =>"succes",'users' => $properties]);
        // }
    }
}
