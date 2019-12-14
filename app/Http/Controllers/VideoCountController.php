<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Redirect;

class VideoCountController extends Controller
{

   
    public function index(){
        echo 'index';
     }
     public function create(){
        echo 'create';
     }
     public function store(Request $request){
        echo 'store';
     }
     public function show($id){
         echo "redireccionando al video...";
        $url = "";
        switch ($id) {
            case "110F18C":
            $url = "https://www.youtube.com/watch?v=VSfZIZP_2no";
            break;

            case "123L18O":
            $url = "https://www.youtube.com/watch?v=9-bMAsU6h-k";
            break;

            case "138A18I":
            $url = "https://www.youtube.com/watch?v=ZXItr3i_GKc&app=desktop";
            break;

            case "1415V18N":
            $url = "https://www.youtube.com/watch?v=bH1HRPM8OMw";
            break;

            case "1524I18N":
            $url = "https://www.youtube.com/watch?v=kdYDkuXEkMw&feature=youtu.be";
            break;

            case "1635O18O":
            $url = "https://www.youtube.com/watch?v=QnQ3hRBB7LY";
            break;

            case "1748F18V":
            $url = " https://www.youtube.com/watch?v=HakltxtNVXQ";
            break;

            case "1863U18A":
            $url = "https://www.youtube.com/watch?v=GDuQlwLWG7A";
            break;
            ///////////////////////////2////////////////////////////

            case "210F18C":
            $url = "https://www.youtube.com/watch?v=vWHwwLKabao";
            break;

            case "223L18O":
            $url = "https://www.youtube.com/watch?v=UZPPpdkfpzI";
            break;

            case "238A18I":
            $url = "https://www.ted.com/talks/richard_st_john_s_8_secrets_of_success?language=es";
            break;

            case "2415V18N":
            $url = "https://www.youtube.com/watch?v=E-22C_sjXrs";
            break;

            case "2524I18N":
            $url = "https://www.youtube.com/watch?v=lIxWPYcK56o";
            break;

            case "2635O18O":
            $url = "https://www.youtube.com/watch?v=BY-y4m7mtrw&t=236s";
            break;

            case "2748F18V":
            $url = "https://www.youtube.com/watch?v=abUUXuOpZ6I";
            break;
            ///////////////////////////3/////////////////////////////
            case "310F18C":
            $url = "https://www.youtube.com/watch?v=gxAXI-cNdBU";
            break;
            case "323L18O":
            $url = "https://www.youtube.com/watch?v=7mpcKQgL1_U";
            break;
            
            case "338A18I":
            $url = "https://www.youtube.com/watch?v=0QvEIM8yQMM";
            break;
            case "3415V18N":
            $url = "https://www.ted.com/talks/richard_st_john_success_is_a_continuous_journey?language=es";
            break;
            
            case "3524I18N":
            $url = "https://www.youtube.com/watch?v=QSGrWg0RKQ4";
            break;
            case "3635O18O":
            $url = "https://www.youtube.com/watch?v=ualz3wKZn7Y";
            break;

            /////////////////////////////4/////////////////////////////////
            case "410F18C":
            $url = "https://www.youtube.com/watch?v=0UQzz7Dwuvk";
            break;
            case "423L18O":
            $url = "https://www.youtube.com/watch?v=bkoIOnANt-Y";
            break;
            
            case "4415V18N":
            $url = "https://www.youtube.com/watch?v=xLhxQ3bYarY";
            break;
            case "3415V18N":
            $url = "https://www.youtube.com/watch?v=2b3xG_YjgvI&t=17s";
            break;
            
            case "4524I18N":
            $url = "https://www.youtube.com/watch?v=yocxgMYLJ80";
            break;
            case "4635O18O":
            $url = "https://www.youtube.com/watch?v=FoV8nxxqNYs";
            break;

            ////////////////////////////5/////////////////////////////
            case "510F18C":
            $url = "https://www.youtube.com/watch?v=t3tfdEorio4";
            break;
            case "523L18O":
            $url = "https://www.youtube.com/watch?v=k3k_41CZlAY";
            break;
            
            case "538A18I":
            $url = "https://www.youtube.com/watch?v=OoshJr_cEgY";
            break;
            case "5415V18N":
            $url = "https://www.youtube.com/watch?v=iHDh-1A6L14";
            break;
          ///////////////////////////////M1 o 6/////////////////////////////
            case "M110F18C":
            $url = "https://www.youtube.com/watch?v=AgT5Fo11UHs";
            break;
            case "M123L18O":
            $url = "https://www.youtube.com/watch?v=UMyhP0aeVLw";
            break;
            
            case "M138A18I":
            $url = "https://www.youtube.com/watch?v=iQPgoOXf1og";
            break;
            case "M2415V18N":
            $url = "https://www.youtube.com/watch?v=ZTO9EabvUVY&t=39s";
            break;
            
            default:
            echo "El video no existe...comuniquese con su docente...";
            
            $url = "https://www.profeplus.com";

        }

        return Redirect::away($url);
     }
     public function edit($id){
        echo 'edit';
     }
     public function update(Request $request, $id){
        echo 'update';
     }
     public function destroy($id){
        echo 'destroy';
     }
}
