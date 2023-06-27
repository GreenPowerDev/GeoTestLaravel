<?php

namespace App\Http\Controllers;
use App\Models\Province;
use App\Models\Ganre;
use App\Models\Notice;
use Carbon\Carbon;
use App\Models\User;

use Illuminate\Http\Request;

class AdminEditController extends Controller
{
    //--------Province--------//
    public function prefecture_new(){
        $province = new Province();
        $province->name = '';
        $province->img_url = asset('img/top/test_area/blank_city.png');
        return view('admin.prefecture.edit', ['province'=>$province]);

    }
    public function prefecture_view(){
        $provinces = Province::all();
        return view('admin.prefecture.view', ['provinces'=>$provinces]);
    }
    public function prefecture_edit($id){
        $province = Province::find($id);
        return view('admin.prefecture.edit', ['province'=>$province]);
    }
    public function prefecture_upload(Request $request){

        $file = $request->file;
        if (strtolower($file->getClientOriginalExtension()) == 'png'
        || strtolower($file->getClientOriginalExtension()) == 'jpg'
        || strtolower($file->getClientOriginalExtension()) == 'jpeg'
        || strtolower($file->getClientOriginalExtension()) == 'gif'
        ) {
        $filename = date('ymdhis') . '.'.$file->getClientOriginalExtension();
        $file_url = 'uploads/province/'.$filename;
        $file->move('uploads/province', $filename);
        return ['file_url' => $file_url];
        }
        else{
            return 'unsupported image';
        }
    }

    public function prefecture_save(Request $request){
        $province = new Province();
        if($request->province_id > 0) $province = Province::find($request->province_id);
        $province->name = $request->add_test_name;
        $province->img_url = $request->province_url;
        $province->save();
        return redirect()->route('admin.prefecture.view');
    }

    public function prefecture_delete($id){
        Province::find($id)->delete();
        return redirect()->route('admin.prefecture.view');
    }

    //---------Ganre---------//
    public function ganre_new(){
        $ganre = new Ganre();
        $ganre->name = '';
        return view('admin.ganre.edit', ['ganre'=>$ganre]);

    }
    public function ganre_view(){
        $ganres = Ganre::all();
        return view('admin.ganre.view', ['ganres'=>$ganres]);
    }
    public function ganre_edit($id){
        $ganre = Ganre::find($id);
        return view('admin.ganre.edit', ['ganre'=>$ganre]);
    }

    public function ganre_save(Request $request){
        $ganre = new Ganre();

        if($request->ganre_id > 0) $ganre = Ganre::find($request->ganre_id);
        $ganre->ganre_name = $request->add_ganre_name;
        $ganre->save();
        return redirect()->route('admin.ganre.view');
    }

    public function ganre_delete($id){
        Ganre::find($id)->delete();
        return redirect()->route('admin.ganre.view');
    }

    //--------Notice--------//
    public function notice_new(){
        $notice = new Notice();
        $notice->name = '';
        $notice->notice_img_url = asset('img/top/test_area/blank_city.png');
        return view('admin.notice.edit', ['notice'=>$notice]);

    }
    public function notice_view(){
        $notices = Notice::all();
        return view('admin.notice.view', ['notices'=>$notices]);
    }
    public function notice_edit($id){
        $notice = Notice::find($id);
        return view('admin.notice.edit', ['notice'=>$notice]);
    }
    public function notice_upload(Request $request){

        $file = $request->file;
        if (strtolower($file->getClientOriginalExtension()) == 'png'
        || strtolower($file->getClientOriginalExtension()) == 'jpg'
        || strtolower($file->getClientOriginalExtension()) == 'jpeg'
        || strtolower($file->getClientOriginalExtension()) == 'gif'
        ) {
        $filename = date('ymdhis') . '.'.$file->getClientOriginalExtension();
        $file_url = 'uploads/notice/'.$filename;
        $file->move('uploads/notice', $filename);
        return ['file_url' => $file_url];
        }
        else{
            return 'unsupported image';
        }
    }

    public function notice_save(Request $request){
        $notice = new Notice();
        $date_val = str_replace(['年','月','日'], '', $request->notice_date);
        if($request->notice_id > 0) $notice = Notice::find($request->notice_id);
        $notice->notice_contitle = $request->add_test_name;
        $notice->notice_img_url = $request->notice_url;
        $notice->notice_context = $request->notice_context;
        $notice->notice_date = Carbon::parse($date_val);
        $notice->save();    
        return redirect()->route('admin.notice.view');
    }

    public function notice_delete($id){
        Notice::find($id)->delete();
        return redirect()->route('admin.notice.view');
    }

    public function user_view(){
        $users = User::all();
        return view('admin.user.view', ['users'=>$users]);
    }

    public function user_delete($id){
        User::find($id)->delete();
        return redirect()->route('admin.user.view');
    }
    
}
