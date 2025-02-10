<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Asset;
use App\Models\Statuslabel;


class CountController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    // public function handleCount(Request $request)
    // {
    //     // Kiểm tra query string để xác định logic
    //     $action = $request->query('action', 'index'); // Mặc định là 'index'

    //     if ($action === 'index') {
    //         return $this->index();
    //     } elseif ($action === 'countMonitor') {
    //         return $this->countMonitor();
    //     }
    //     dd($device_count);
    //     // Trả về lỗi nếu không tìm thấy action
    //     return response()->json(['error' => 'Invalid action'], 400);
    // }

    public function index()
    {   
        // Seta PC
        $count_st_1 = DB::table('assets as a')
            ->join('models as m', 'a.model_id', '=', 'm.id')
            ->join('status_labels as s', 'a.status_id', '=', 's.id')
            ->join('companies as c', 'a.company_id', '=', 'c.id')
            ->where('c.name', 'Seta International')
            ->where('m.name', 'Case PC lắp ghép')
            ->where('s.name', 'Ready to Deploy')
            ->count('a.id'); // Đếm số lượng thiết bị

        $count_st_2 = DB::table('assets as a')
            ->join('models as m', 'a.model_id', '=', 'm.id')
            ->join('status_labels as s', 'a.status_id', '=', 's.id')
            ->join('companies as c', 'a.company_id', '=', 'c.id')
            ->where('c.name', 'Seta International')
            ->where('m.name', 'Case PC lắp ghép')
            ->where('s.name', 'Deployed')
            ->count('a.id'); // Đếm số lượng thiết bị
        
        $count_st_3 = DB::table('assets as a')
            ->join('models as m', 'a.model_id', '=', 'm.id')
            ->join('status_labels as s', 'a.status_id', '=', 's.id')
            ->join('companies as c', 'a.company_id', '=', 'c.id')
            ->where('c.name', 'Seta International')
            ->where('m.name', 'Case PC lắp ghép')
            ->where('s.name', 'Archived')
            ->count('a.id'); // Đếm số lượng thiết bị

        //BlueOC PC
        $count_bl_1 = DB::table('assets as a')
            ->join('models as m', 'a.model_id', '=', 'm.id')
            ->join('status_labels as s', 'a.status_id', '=', 's.id')
            ->join('companies as c', 'a.company_id', '=', 'c.id')
            ->where('c.name', 'BlueOC Tech')
            ->where('m.name', 'Case PC lắp ghép')
            ->where('s.name', 'Ready to Deploy')
            ->count('a.id'); // Đếm số lượng thiết bị

        $count_bl_2 = DB::table('assets as a')
            ->join('models as m', 'a.model_id', '=', 'm.id')
            ->join('status_labels as s', 'a.status_id', '=', 's.id')
            ->join('companies as c', 'a.company_id', '=', 'c.id')
            ->where('c.name', 'BlueOC Tech')
            ->where('m.name', 'Case PC lắp ghép')
            ->where('s.name', 'Deployed')
            ->count('a.id'); // Đếm số lượng thiết bị
        
        $count_bl_3 = DB::table('assets as a')
            ->join('models as m', 'a.model_id', '=', 'm.id')
            ->join('status_labels as s', 'a.status_id', '=', 's.id')
            ->join('companies as c', 'a.company_id', '=', 'c.id')
            ->where('c.name', 'BlueOC Tech')
            ->where('m.name', 'Case PC lắp ghép')
            ->where('s.name', 'Archived')
            ->count('a.id'); // Đếm số lượng thiết bị

        //AI Cycle PC
        $count_ai_1 = DB::table('assets as a')
            ->join('models as m', 'a.model_id', '=', 'm.id')
            ->join('status_labels as s', 'a.status_id', '=', 's.id')
            ->join('companies as c', 'a.company_id', '=', 'c.id')
            ->where('c.name', 'AI Cycle')
            ->where('m.name', 'Case PC lắp ghép')
            ->where('s.name', 'Ready to Deploy')
            ->count('a.id'); // Đếm số lượng thiết bị

        $count_ai_2 = DB::table('assets as a')
            ->join('models as m', 'a.model_id', '=', 'm.id')
            ->join('status_labels as s', 'a.status_id', '=', 's.id')
            ->join('companies as c', 'a.company_id', '=', 'c.id')
            ->where('c.name', 'AI Cycle')
            ->where('m.name', 'Case PC lắp ghép')
            ->where('s.name', 'Deployed')
            ->count('a.id'); // Đếm số lượng thiết bị
        
        $count_ai_3 = DB::table('assets as a')
            ->join('models as m', 'a.model_id', '=', 'm.id')
            ->join('status_labels as s', 'a.status_id', '=', 's.id')
            ->join('companies as c', 'a.company_id', '=', 'c.id')
            ->where('c.name', 'AI Cycle')
            ->where('m.name', 'Case PC lắp ghép')
            ->where('s.name', 'Archived')
            ->count('a.id'); // Đếm số lượng thiết bị

        // Seta Man hinh 
        $count_st_4 = DB::table('assets as a')
            ->join('models as m', 'a.model_id', '=', 'm.id')
            ->join('categories as cat', 'm.category_id', '=', 'cat.id')
            ->join('status_labels as s', 'a.status_id', '=', 's.id')
            ->join('companies as c', 'a.company_id', '=', 'c.id')
            ->where('c.name', 'Seta International')
            ->where('s.name', 'Ready to Deploy')
            ->where('cat.name', 'Màn hình')
            ->count('a.id'); // Đếm số lượng ID trong bảng assets

        $count_st_5 = DB::table('assets as a')
            ->join('models as m', 'a.model_id', '=', 'm.id')
            ->join('categories as cat', 'm.category_id', '=', 'cat.id')
            ->join('status_labels as s', 'a.status_id', '=', 's.id')
            ->join('companies as c', 'a.company_id', '=', 'c.id')
            ->where('c.name', 'Seta International')
            ->where('s.name', 'Deployed')
            ->where('cat.name', 'Màn hình')
            ->count('a.id'); // Đếm số lượng ID trong bảng assets

        $count_st_6 = DB::table('assets as a')
            ->join('models as m', 'a.model_id', '=', 'm.id')
            ->join('categories as cat', 'm.category_id', '=', 'cat.id')
            ->join('status_labels as s', 'a.status_id', '=', 's.id')
            ->join('companies as c', 'a.company_id', '=', 'c.id')
            ->where('c.name', 'Seta International')
            ->where('s.name', 'Archived')
            ->where('cat.name', 'Màn hình')
            ->count('a.id'); // Đếm số lượng ID trong bảng assets

        // BlueOC Man hinh 
        $count_bl_4 = DB::table('assets as a')
            ->join('models as m', 'a.model_id', '=', 'm.id')
            ->join('categories as cat', 'm.category_id', '=', 'cat.id')
            ->join('status_labels as s', 'a.status_id', '=', 's.id')
            ->join('companies as c', 'a.company_id', '=', 'c.id')
            ->where('c.name', 'BlueOC Tech')
            ->where('s.name', 'Ready to Deploy')
            ->where('cat.name', 'Màn hình')
            ->count('a.id'); // Đếm số lượng ID trong bảng assets

        $count_bl_5 = DB::table('assets as a')
            ->join('models as m', 'a.model_id', '=', 'm.id')
            ->join('categories as cat', 'm.category_id', '=', 'cat.id')
            ->join('status_labels as s', 'a.status_id', '=', 's.id')
            ->join('companies as c', 'a.company_id', '=', 'c.id')
            ->where('c.name', 'BlueOC Tech')
            ->where('s.name', 'Deployed')
            ->where('cat.name', 'Màn hình')
            ->count('a.id'); // Đếm số lượng ID trong bảng assets

        $count_bl_6 = DB::table('assets as a')
            ->join('models as m', 'a.model_id', '=', 'm.id')
            ->join('categories as cat', 'm.category_id', '=', 'cat.id')
            ->join('status_labels as s', 'a.status_id', '=', 's.id')
            ->join('companies as c', 'a.company_id', '=', 'c.id')
            ->where('c.name', 'BlueOC Tech')
            ->where('s.name', 'Archived')
            ->where('cat.name', 'Màn hình')
            ->count('a.id'); // Đếm số lượng ID trong bảng assets

        // AI Cycle Man hinh 
        $count_ai_4 = DB::table('assets as a')
            ->join('models as m', 'a.model_id', '=', 'm.id')
            ->join('categories as cat', 'm.category_id', '=', 'cat.id')
            ->join('status_labels as s', 'a.status_id', '=', 's.id')
            ->join('companies as c', 'a.company_id', '=', 'c.id')
            ->where('c.name', 'AI Cycle')
            ->where('s.name', 'Ready to Deploy')
            ->where('cat.name', 'Màn hình')
            ->count('a.id'); // Đếm số lượng ID trong bảng assets

        $count_ai_5 = DB::table('assets as a')
            ->join('models as m', 'a.model_id', '=', 'm.id')
            ->join('categories as cat', 'm.category_id', '=', 'cat.id')
            ->join('status_labels as s', 'a.status_id', '=', 's.id')
            ->join('companies as c', 'a.company_id', '=', 'c.id')
            ->where('c.name', 'AI Cycle')
            ->where('s.name', 'Deployed')
            ->where('cat.name', 'Màn hình')
            ->count('a.id'); // Đếm số lượng ID trong bảng assets

        $count_ai_6 = DB::table('assets as a')
            ->join('models as m', 'a.model_id', '=', 'm.id')
            ->join('categories as cat', 'm.category_id', '=', 'cat.id')
            ->join('status_labels as s', 'a.status_id', '=', 's.id')
            ->join('companies as c', 'a.company_id', '=', 'c.id')
            ->where('c.name', 'AI Cycle')
            ->where('s.name', 'Archived')
            ->where('cat.name', 'Màn hình')
            ->count('a.id'); // Đếm số lượng ID trong bảng assets

        // Seta Ban phim
        $count_st_7 = DB::table('assets as a')
            ->join('models as m', 'a.model_id', '=', 'm.id')
            ->join('categories as cat', 'm.category_id', '=', 'cat.id')
            ->join('status_labels as s', 'a.status_id', '=', 's.id')
            ->join('companies as c', 'a.company_id', '=', 'c.id')
            ->where('c.name', 'Seta International')
            ->where('s.name', 'Ready to Deploy')
            ->where('cat.name', 'Bàn phím')
            ->count('a.id'); // Đếm số lượng ID trong bảng assets

        $count_st_8 = DB::table('assets as a')
            ->join('models as m', 'a.model_id', '=', 'm.id')
            ->join('categories as cat', 'm.category_id', '=', 'cat.id')
            ->join('status_labels as s', 'a.status_id', '=', 's.id')
            ->join('companies as c', 'a.company_id', '=', 'c.id')
            ->where('c.name', 'Seta International')
            ->where('s.name', 'Deployed')
            ->where('cat.name', 'Bàn phím')
            ->count('a.id'); // Đếm số lượng ID trong bảng assets

        $count_st_9 = DB::table('assets as a')
            ->join('models as m', 'a.model_id', '=', 'm.id')
            ->join('categories as cat', 'm.category_id', '=', 'cat.id')
            ->join('status_labels as s', 'a.status_id', '=', 's.id')
            ->join('companies as c', 'a.company_id', '=', 'c.id')
            ->where('c.name', 'Seta International')
            ->where('s.name', 'Archived')
            ->where('cat.name', 'Bàn phím')
            ->count('a.id'); // Đếm số lượng ID trong bảng assets

        // BlueOC Ban phim
        $count_bl_7 = DB::table('assets as a')
            ->join('models as m', 'a.model_id', '=', 'm.id')
            ->join('categories as cat', 'm.category_id', '=', 'cat.id')
            ->join('status_labels as s', 'a.status_id', '=', 's.id')
            ->join('companies as c', 'a.company_id', '=', 'c.id')
            ->where('c.name', 'BlueOC Tech')
            ->where('s.name', 'Ready to Deploy')
            ->where('cat.name', 'Bàn phím')
            ->count('a.id'); // Đếm số lượng ID trong bảng assets

        $count_bl_8 = DB::table('assets as a')
            ->join('models as m', 'a.model_id', '=', 'm.id')
            ->join('categories as cat', 'm.category_id', '=', 'cat.id')
            ->join('status_labels as s', 'a.status_id', '=', 's.id')
            ->join('companies as c', 'a.company_id', '=', 'c.id')
            ->where('c.name', 'BlueOC Tech')
            ->where('s.name', 'Deployed')
            ->where('cat.name', 'Bàn phím')
            ->count('a.id'); // Đếm số lượng ID trong bảng assets

        $count_bl_9 = DB::table('assets as a')
            ->join('models as m', 'a.model_id', '=', 'm.id')
            ->join('categories as cat', 'm.category_id', '=', 'cat.id')
            ->join('status_labels as s', 'a.status_id', '=', 's.id')
            ->join('companies as c', 'a.company_id', '=', 'c.id')
            ->where('c.name', 'BlueOC Tech')
            ->where('s.name', 'Archived')
            ->where('cat.name', 'Bàn phím')
            ->count('a.id'); // Đếm số lượng ID trong bảng assets

        // AI Cycle Ban phim
        $count_ai_7 = DB::table('assets as a')
            ->join('models as m', 'a.model_id', '=', 'm.id')
            ->join('categories as cat', 'm.category_id', '=', 'cat.id')
            ->join('status_labels as s', 'a.status_id', '=', 's.id')
            ->join('companies as c', 'a.company_id', '=', 'c.id')
            ->where('c.name', 'AI Cycle')
            ->where('s.name', 'Ready to Deploy')
            ->where('cat.name', 'Bàn phím')
            ->count('a.id'); // Đếm số lượng ID trong bảng assets

        $count_ai_8 = DB::table('assets as a')
            ->join('models as m', 'a.model_id', '=', 'm.id')
            ->join('categories as cat', 'm.category_id', '=', 'cat.id')
            ->join('status_labels as s', 'a.status_id', '=', 's.id')
            ->join('companies as c', 'a.company_id', '=', 'c.id')
            ->where('c.name', 'AI Cycle')
            ->where('s.name', 'Deployed')
            ->where('cat.name', 'Bàn phím')
            ->count('a.id'); // Đếm số lượng ID trong bảng assets

        $count_ai_9 = DB::table('assets as a')
            ->join('models as m', 'a.model_id', '=', 'm.id')
            ->join('categories as cat', 'm.category_id', '=', 'cat.id')
            ->join('status_labels as s', 'a.status_id', '=', 's.id')
            ->join('companies as c', 'a.company_id', '=', 'c.id')
            ->where('c.name', 'AI Cycle')
            ->where('s.name', 'Archived')
            ->where('cat.name', 'Bàn phím')
            ->count('a.id'); // Đếm số lượng ID trong bảng assets
        
        // Seta Chuot
        $count_st_10 = DB::table('assets as a')
            ->join('models as m', 'a.model_id', '=', 'm.id')
            ->join('categories as cat', 'm.category_id', '=', 'cat.id')
            ->join('status_labels as s', 'a.status_id', '=', 's.id')
            ->join('companies as c', 'a.company_id', '=', 'c.id')
            ->where('c.name', 'Seta International')
            ->where('s.name', 'Ready to Deploy')
            ->where('cat.name', 'Chuột')
            ->count('a.id'); // Đếm số lượng ID trong bảng assets

        $count_st_11 = DB::table('assets as a')
            ->join('models as m', 'a.model_id', '=', 'm.id')
            ->join('categories as cat', 'm.category_id', '=', 'cat.id')
            ->join('status_labels as s', 'a.status_id', '=', 's.id')
            ->join('companies as c', 'a.company_id', '=', 'c.id')
            ->where('c.name', 'Seta International')
            ->where('s.name', 'Deployed')
            ->where('cat.name', 'Chuột')
            ->count('a.id'); // Đếm số lượng ID trong bảng assets

        $count_st_12 = DB::table('assets as a')
            ->join('models as m', 'a.model_id', '=', 'm.id')
            ->join('categories as cat', 'm.category_id', '=', 'cat.id')
            ->join('status_labels as s', 'a.status_id', '=', 's.id')
            ->join('companies as c', 'a.company_id', '=', 'c.id')
            ->where('c.name', 'Seta International')
            ->where('s.name', 'Archived')
            ->where('cat.name', 'Chuột')
            ->count('a.id'); // Đếm số lượng ID trong bảng assets
        
        // BlueOC Chuot
        $count_bl_10 = DB::table('assets as a')
            ->join('models as m', 'a.model_id', '=', 'm.id')
            ->join('categories as cat', 'm.category_id', '=', 'cat.id')
            ->join('status_labels as s', 'a.status_id', '=', 's.id')
            ->join('companies as c', 'a.company_id', '=', 'c.id')
            ->where('c.name', 'BlueOC Tech')
            ->where('s.name', 'Ready to Deploy')
            ->where('cat.name', 'Chuột')
            ->count('a.id'); // Đếm số lượng ID trong bảng assets

        $count_bl_11 = DB::table('assets as a')
            ->join('models as m', 'a.model_id', '=', 'm.id')
            ->join('categories as cat', 'm.category_id', '=', 'cat.id')
            ->join('status_labels as s', 'a.status_id', '=', 's.id')
            ->join('companies as c', 'a.company_id', '=', 'c.id')
            ->where('c.name', 'BlueOC Tech')
            ->where('s.name', 'Deployed')
            ->where('cat.name', 'Chuột')
            ->count('a.id'); // Đếm số lượng ID trong bảng assets

        $count_bl_12 = DB::table('assets as a')
            ->join('models as m', 'a.model_id', '=', 'm.id')
            ->join('categories as cat', 'm.category_id', '=', 'cat.id')
            ->join('status_labels as s', 'a.status_id', '=', 's.id')
            ->join('companies as c', 'a.company_id', '=', 'c.id')
            ->where('c.name', 'BlueOC Tech')
            ->where('s.name', 'Archived')
            ->where('cat.name', 'Chuột')
            ->count('a.id'); // Đếm số lượng ID trong bảng assets
        
        // AI Cycle Chuot
        $count_ai_10 = DB::table('assets as a')
            ->join('models as m', 'a.model_id', '=', 'm.id')
            ->join('categories as cat', 'm.category_id', '=', 'cat.id')
            ->join('status_labels as s', 'a.status_id', '=', 's.id')
            ->join('companies as c', 'a.company_id', '=', 'c.id')
            ->where('c.name', 'AI Cycle')
            ->where('s.name', 'Ready to Deploy')
            ->where('cat.name', 'Chuột')
            ->count('a.id'); // Đếm số lượng ID trong bảng assets

        $count_ai_11 = DB::table('assets as a')
            ->join('models as m', 'a.model_id', '=', 'm.id')
            ->join('categories as cat', 'm.category_id', '=', 'cat.id')
            ->join('status_labels as s', 'a.status_id', '=', 's.id')
            ->join('companies as c', 'a.company_id', '=', 'c.id')
            ->where('c.name', 'AI Cycle')
            ->where('s.name', 'Deployed')
            ->where('cat.name', 'Chuột')
            ->count('a.id'); // Đếm số lượng ID trong bảng assets

        $count_ai_12 = DB::table('assets as a')
            ->join('models as m', 'a.model_id', '=', 'm.id')
            ->join('categories as cat', 'm.category_id', '=', 'cat.id')
            ->join('status_labels as s', 'a.status_id', '=', 's.id')
            ->join('companies as c', 'a.company_id', '=', 'c.id')
            ->where('c.name', 'AI Cycle')
            ->where('s.name', 'Archived')
            ->where('cat.name', 'Chuột')
            ->count('a.id'); // Đếm số lượng ID trong bảng assets

        // Seta Tai nghe
        $count_st_13 = DB::table('assets as a')
            ->join('models as m', 'a.model_id', '=', 'm.id')
            ->join('categories as cat', 'm.category_id', '=', 'cat.id')
            ->join('status_labels as s', 'a.status_id', '=', 's.id')
            ->join('companies as c', 'a.company_id', '=', 'c.id')
            ->where('c.name', 'Seta International')
            ->where('s.name', 'Ready to Deploy')
            ->where('cat.name', 'Tai nghe')
            ->count('a.id'); // Đếm số lượng ID trong bảng assets

        $count_st_14 = DB::table('assets as a')
            ->join('models as m', 'a.model_id', '=', 'm.id')
            ->join('categories as cat', 'm.category_id', '=', 'cat.id')
            ->join('status_labels as s', 'a.status_id', '=', 's.id')
            ->join('companies as c', 'a.company_id', '=', 'c.id')
            ->where('c.name', 'Seta International')
            ->where('s.name', 'Deployed')
            ->where('cat.name', 'Tai nghe')
            ->count('a.id'); // Đếm số lượng ID trong bảng assets

        $count_st_15 = DB::table('assets as a')
            ->join('models as m', 'a.model_id', '=', 'm.id')
            ->join('categories as cat', 'm.category_id', '=', 'cat.id')
            ->join('status_labels as s', 'a.status_id', '=', 's.id')
            ->join('companies as c', 'a.company_id', '=', 'c.id')
            ->where('c.name', 'Seta International')
            ->where('s.name', 'Archived')
            ->where('cat.name', 'Tai nghe')
            ->count('a.id'); // Đếm số lượng ID trong bảng assets

        // BlueOC Tai nghe
        $count_bl_13 = DB::table('assets as a')
            ->join('models as m', 'a.model_id', '=', 'm.id')
            ->join('categories as cat', 'm.category_id', '=', 'cat.id')
            ->join('status_labels as s', 'a.status_id', '=', 's.id')
            ->join('companies as c', 'a.company_id', '=', 'c.id')
            ->where('c.name', 'BlueOC Tech')
            ->where('s.name', 'Ready to Deploy')
            ->where('cat.name', 'Tai nghe')
            ->count('a.id'); // Đếm số lượng ID trong bảng assets

        $count_bl_14 = DB::table('assets as a')
            ->join('models as m', 'a.model_id', '=', 'm.id')
            ->join('categories as cat', 'm.category_id', '=', 'cat.id')
            ->join('status_labels as s', 'a.status_id', '=', 's.id')
            ->join('companies as c', 'a.company_id', '=', 'c.id')
            ->where('c.name', 'BlueOC Tech')
            ->where('s.name', 'Deployed')
            ->where('cat.name', 'Tai nghe')
            ->count('a.id'); // Đếm số lượng ID trong bảng assets

        $count_bl_15 = DB::table('assets as a')
            ->join('models as m', 'a.model_id', '=', 'm.id')
            ->join('categories as cat', 'm.category_id', '=', 'cat.id')
            ->join('status_labels as s', 'a.status_id', '=', 's.id')
            ->join('companies as c', 'a.company_id', '=', 'c.id')
            ->where('c.name', 'BlueOC Tech')
            ->where('s.name', 'Archived')
            ->where('cat.name', 'Tai nghe')
            ->count('a.id'); // Đếm số lượng ID trong bảng assets

        // Ai Cycle Tai nghe
        $count_ai_13 = DB::table('assets as a')
            ->join('models as m', 'a.model_id', '=', 'm.id')
            ->join('categories as cat', 'm.category_id', '=', 'cat.id')
            ->join('status_labels as s', 'a.status_id', '=', 's.id')
            ->join('companies as c', 'a.company_id', '=', 'c.id')
            ->where('c.name', 'AI Cycle')
            ->where('s.name', 'Ready to Deploy')
            ->where('cat.name', 'Tai nghe')
            ->count('a.id'); // Đếm số lượng ID trong bảng assets

        $count_ai_14 = DB::table('assets as a')
            ->join('models as m', 'a.model_id', '=', 'm.id')
            ->join('categories as cat', 'm.category_id', '=', 'cat.id')
            ->join('status_labels as s', 'a.status_id', '=', 's.id')
            ->join('companies as c', 'a.company_id', '=', 'c.id')
            ->where('c.name', 'AI Cycle')
            ->where('s.name', 'Deployed')
            ->where('cat.name', 'Tai nghe')
            ->count('a.id'); // Đếm số lượng ID trong bảng assets

        $count_ai_15 = DB::table('assets as a')
            ->join('models as m', 'a.model_id', '=', 'm.id')
            ->join('categories as cat', 'm.category_id', '=', 'cat.id')
            ->join('status_labels as s', 'a.status_id', '=', 's.id')
            ->join('companies as c', 'a.company_id', '=', 'c.id')
            ->where('c.name', 'AI Cycle')
            ->where('s.name', 'Archived')
            ->where('cat.name', 'Tai nghe')
            ->count('a.id'); // Đếm số lượng ID trong bảng assets

        // Seta Laptop
        $count_st_16 = DB::table('assets as a')
            ->join('models as m', 'a.model_id', '=', 'm.id')
            ->join('categories as cat', 'm.category_id', '=', 'cat.id')
            ->join('status_labels as s', 'a.status_id', '=', 's.id')
            ->join('companies as c', 'a.company_id', '=', 'c.id')
            ->where('c.name', 'Seta International')
            ->where('s.name', 'Ready to Deploy')
            ->where('cat.name', 'Laptop')
            ->count('a.id'); // Đếm số lượng ID trong bảng assets

        $count_st_17 = DB::table('assets as a')
            ->join('models as m', 'a.model_id', '=', 'm.id')
            ->join('categories as cat', 'm.category_id', '=', 'cat.id')
            ->join('status_labels as s', 'a.status_id', '=', 's.id')
            ->join('companies as c', 'a.company_id', '=', 'c.id')
            ->where('c.name', 'Seta International')
            ->where('s.name', 'Deployed')
            ->where('cat.name', 'Laptop')
            ->count('a.id'); // Đếm số lượng ID trong bảng assets

        $count_st_18 = DB::table('assets as a')
            ->join('models as m', 'a.model_id', '=', 'm.id')
            ->join('categories as cat', 'm.category_id', '=', 'cat.id')
            ->join('status_labels as s', 'a.status_id', '=', 's.id')
            ->join('companies as c', 'a.company_id', '=', 'c.id')
            ->where('c.name', 'Seta International')
            ->where('s.name', 'Archived')
            ->where('cat.name', 'Laptop')
            ->count('a.id'); // Đếm số lượng ID trong bảng assets

        // BlueOC Laptop
        $count_bl_16 = DB::table('assets as a')
            ->join('models as m', 'a.model_id', '=', 'm.id')
            ->join('categories as cat', 'm.category_id', '=', 'cat.id')
            ->join('status_labels as s', 'a.status_id', '=', 's.id')
            ->join('companies as c', 'a.company_id', '=', 'c.id')
            ->where('c.name', 'BlueOC Tech')
            ->where('s.name', 'Ready to Deploy')
            ->where('cat.name', 'Laptop')
            ->count('a.id'); // Đếm số lượng ID trong bảng assets

        $count_bl_17 = DB::table('assets as a')
            ->join('models as m', 'a.model_id', '=', 'm.id')
            ->join('categories as cat', 'm.category_id', '=', 'cat.id')
            ->join('status_labels as s', 'a.status_id', '=', 's.id')
            ->join('companies as c', 'a.company_id', '=', 'c.id')
            ->where('c.name', 'BlueOC Tech')
            ->where('s.name', 'Deployed')
            ->where('cat.name', 'Laptop')
            ->count('a.id'); // Đếm số lượng ID trong bảng assets

        $count_bl_18 = DB::table('assets as a')
            ->join('models as m', 'a.model_id', '=', 'm.id')
            ->join('categories as cat', 'm.category_id', '=', 'cat.id')
            ->join('status_labels as s', 'a.status_id', '=', 's.id')
            ->join('companies as c', 'a.company_id', '=', 'c.id')
            ->where('c.name', 'BlueOC Tech')
            ->where('s.name', 'Archived')
            ->where('cat.name', 'Laptop')
            ->count('a.id'); // Đếm số lượng ID trong bảng assets

        // AI Cycle Laptop
        $count_ai_16 = DB::table('assets as a')
            ->join('models as m', 'a.model_id', '=', 'm.id')
            ->join('categories as cat', 'm.category_id', '=', 'cat.id')
            ->join('status_labels as s', 'a.status_id', '=', 's.id')
            ->join('companies as c', 'a.company_id', '=', 'c.id')
            ->where('c.name', 'AI Cycle')
            ->where('s.name', 'Ready to Deploy')
            ->where('cat.name', 'Laptop')
            ->count('a.id'); // Đếm số lượng ID trong bảng assets

        $count_ai_17 = DB::table('assets as a')
            ->join('models as m', 'a.model_id', '=', 'm.id')
            ->join('categories as cat', 'm.category_id', '=', 'cat.id')
            ->join('status_labels as s', 'a.status_id', '=', 's.id')
            ->join('companies as c', 'a.company_id', '=', 'c.id')
            ->where('c.name', 'AI Cycle')
            ->where('s.name', 'Deployed')
            ->where('cat.name', 'Laptop')
            ->count('a.id'); // Đếm số lượng ID trong bảng assets

        $count_ai_18 = DB::table('assets as a')
            ->join('models as m', 'a.model_id', '=', 'm.id')
            ->join('categories as cat', 'm.category_id', '=', 'cat.id')
            ->join('status_labels as s', 'a.status_id', '=', 's.id')
            ->join('companies as c', 'a.company_id', '=', 'c.id')
            ->where('c.name', 'AI Cycle')
            ->where('s.name', 'Archived')
            ->where('cat.name', 'Laptop')
            ->count('a.id'); // Đếm số lượng ID trong bảng assets

        // Seta Macbook
        $count_st_19 = DB::table('assets as a')
            ->join('models as m', 'a.model_id', '=', 'm.id')
            ->join('categories as cat', 'm.category_id', '=', 'cat.id')
            ->join('status_labels as s', 'a.status_id', '=', 's.id')
            ->join('companies as c', 'a.company_id', '=', 'c.id')
            ->where('c.name', 'Seta International')
            ->where('s.name', 'Ready to Deploy')
            ->where('cat.name', 'Macbook')
            ->count('a.id'); // Đếm số lượng ID trong bảng assets

        $count_st_20 = DB::table('assets as a')
            ->join('models as m', 'a.model_id', '=', 'm.id')
            ->join('categories as cat', 'm.category_id', '=', 'cat.id')
            ->join('status_labels as s', 'a.status_id', '=', 's.id')
            ->join('companies as c', 'a.company_id', '=', 'c.id')
            ->where('c.name', 'Seta International')
            ->where('s.name', 'Deployed')
            ->where('cat.name', 'Macbook')
            ->count('a.id'); // Đếm số lượng ID trong bảng assets

        $count_st_21 = DB::table('assets as a')
            ->join('models as m', 'a.model_id', '=', 'm.id')
            ->join('categories as cat', 'm.category_id', '=', 'cat.id')
            ->join('status_labels as s', 'a.status_id', '=', 's.id')
            ->join('companies as c', 'a.company_id', '=', 'c.id')
            ->where('c.name', 'Seta International')
            ->where('s.name', 'Archived')
            ->where('cat.name', 'Macbook')
            ->count('a.id'); // Đếm số lượng ID trong bảng assets

        // BlueOC Macbook
        $count_bl_19 = DB::table('assets as a')
            ->join('models as m', 'a.model_id', '=', 'm.id')
            ->join('categories as cat', 'm.category_id', '=', 'cat.id')
            ->join('status_labels as s', 'a.status_id', '=', 's.id')
            ->join('companies as c', 'a.company_id', '=', 'c.id')
            ->where('c.name', 'BlueOC Tech')
            ->where('s.name', 'Ready to Deploy')
            ->where('cat.name', 'Macbook')
            ->count('a.id'); // Đếm số lượng ID trong bảng assets

        $count_bl_20 = DB::table('assets as a')
            ->join('models as m', 'a.model_id', '=', 'm.id')
            ->join('categories as cat', 'm.category_id', '=', 'cat.id')
            ->join('status_labels as s', 'a.status_id', '=', 's.id')
            ->join('companies as c', 'a.company_id', '=', 'c.id')
            ->where('c.name', 'BlueOC Tech')
            ->where('s.name', 'Deployed')
            ->where('cat.name', 'Macbook')
            ->count('a.id'); // Đếm số lượng ID trong bảng assets

        $count_bl_21 = DB::table('assets as a')
            ->join('models as m', 'a.model_id', '=', 'm.id')
            ->join('categories as cat', 'm.category_id', '=', 'cat.id')
            ->join('status_labels as s', 'a.status_id', '=', 's.id')
            ->join('companies as c', 'a.company_id', '=', 'c.id')
            ->where('c.name', 'BlueOC Tech')
            ->where('s.name', 'Archived')
            ->where('cat.name', 'Macbook')
            ->count('a.id'); // Đếm số lượng ID trong bảng assets

        // AI Cycle Macbook
        $count_ai_19 = DB::table('assets as a')
            ->join('models as m', 'a.model_id', '=', 'm.id')
            ->join('categories as cat', 'm.category_id', '=', 'cat.id')
            ->join('status_labels as s', 'a.status_id', '=', 's.id')
            ->join('companies as c', 'a.company_id', '=', 'c.id')
            ->where('c.name', 'AI Cycle')
            ->where('s.name', 'Ready to Deploy')
            ->where('cat.name', 'Macbook')
            ->count('a.id'); // Đếm số lượng ID trong bảng assets

        $count_ai_20 = DB::table('assets as a')
            ->join('models as m', 'a.model_id', '=', 'm.id')
            ->join('categories as cat', 'm.category_id', '=', 'cat.id')
            ->join('status_labels as s', 'a.status_id', '=', 's.id')
            ->join('companies as c', 'a.company_id', '=', 'c.id')
            ->where('c.name', 'AI Cycle')
            ->where('s.name', 'Deployed')
            ->where('cat.name', 'Macbook')
            ->count('a.id'); // Đếm số lượng ID trong bảng assets

        $count_ai_21 = DB::table('assets as a')
            ->join('models as m', 'a.model_id', '=', 'm.id')
            ->join('categories as cat', 'm.category_id', '=', 'cat.id')
            ->join('status_labels as s', 'a.status_id', '=', 's.id')
            ->join('companies as c', 'a.company_id', '=', 'c.id')
            ->where('c.name', 'AI Cycle')
            ->where('s.name', 'Archived')
            ->where('cat.name', 'Macbook')
            ->count('a.id'); // Đếm số lượng ID trong bảng assets

        // Seta Mac Mini
        $count_st_22 = DB::table('assets as a')
            ->join('models as m', 'a.model_id', '=', 'm.id')
            ->join('categories as cat', 'm.category_id', '=', 'cat.id')
            ->join('status_labels as s', 'a.status_id', '=', 's.id')
            ->join('companies as c', 'a.company_id', '=', 'c.id')
            ->where('c.name', 'Seta International')
            ->where('s.name', 'Ready to Deploy')
            ->where('cat.name', 'Mac Mini')
            ->count('a.id'); // Đếm số lượng ID trong bảng assets

        $count_st_23 = DB::table('assets as a')
            ->join('models as m', 'a.model_id', '=', 'm.id')
            ->join('categories as cat', 'm.category_id', '=', 'cat.id')
            ->join('status_labels as s', 'a.status_id', '=', 's.id')
            ->join('companies as c', 'a.company_id', '=', 'c.id')
            ->where('c.name', 'Seta International')
            ->where('s.name', 'Deployed')
            ->where('cat.name', 'Mac Mini')
            ->count('a.id'); // Đếm số lượng ID trong bảng assets

        $count_st_24 = DB::table('assets as a')
            ->join('models as m', 'a.model_id', '=', 'm.id')
            ->join('categories as cat', 'm.category_id', '=', 'cat.id')
            ->join('status_labels as s', 'a.status_id', '=', 's.id')
            ->join('companies as c', 'a.company_id', '=', 'c.id')
            ->where('c.name', 'Seta International')
            ->where('s.name', 'Archived')
            ->where('cat.name', 'Mac Mini')
            ->count('a.id'); // Đếm số lượng ID trong bảng assets

        // BlueOC Mac Mini
        $count_bl_22 = DB::table('assets as a')
            ->join('models as m', 'a.model_id', '=', 'm.id')
            ->join('categories as cat', 'm.category_id', '=', 'cat.id')
            ->join('status_labels as s', 'a.status_id', '=', 's.id')
            ->join('companies as c', 'a.company_id', '=', 'c.id')
            ->where('c.name', 'BlueOC Tech')
            ->where('s.name', 'Ready to Deploy')
            ->where('cat.name', 'Mac Mini')
            ->count('a.id'); // Đếm số lượng ID trong bảng assets

        $count_bl_23 = DB::table('assets as a')
            ->join('models as m', 'a.model_id', '=', 'm.id')
            ->join('categories as cat', 'm.category_id', '=', 'cat.id')
            ->join('status_labels as s', 'a.status_id', '=', 's.id')
            ->join('companies as c', 'a.company_id', '=', 'c.id')
            ->where('c.name', 'BlueOC Tech')
            ->where('s.name', 'Deployed')
            ->where('cat.name', 'Mac Mini')
            ->count('a.id'); // Đếm số lượng ID trong bảng assets

        $count_bl_24 = DB::table('assets as a')
            ->join('models as m', 'a.model_id', '=', 'm.id')
            ->join('categories as cat', 'm.category_id', '=', 'cat.id')
            ->join('status_labels as s', 'a.status_id', '=', 's.id')
            ->join('companies as c', 'a.company_id', '=', 'c.id')
            ->where('c.name', 'BlueOC Tech')
            ->where('s.name', 'Archived')
            ->where('cat.name', 'Mac Mini')
            ->count('a.id'); // Đếm số lượng ID trong bảng assets

        // AI Cycle Mac Mini
        $count_ai_22 = DB::table('assets as a')
            ->join('models as m', 'a.model_id', '=', 'm.id')
            ->join('categories as cat', 'm.category_id', '=', 'cat.id')
            ->join('status_labels as s', 'a.status_id', '=', 's.id')
            ->join('companies as c', 'a.company_id', '=', 'c.id')
            ->where('c.name', 'AI Cycle')
            ->where('s.name', 'Ready to Deploy')
            ->where('cat.name', 'Mac Mini')
            ->count('a.id'); // Đếm số lượng ID trong bảng assets

        $count_ai_23 = DB::table('assets as a')
            ->join('models as m', 'a.model_id', '=', 'm.id')
            ->join('categories as cat', 'm.category_id', '=', 'cat.id')
            ->join('status_labels as s', 'a.status_id', '=', 's.id')
            ->join('companies as c', 'a.company_id', '=', 'c.id')
            ->where('c.name', 'AI Cycle')
            ->where('s.name', 'Deployed')
            ->where('cat.name', 'Mac Mini')
            ->count('a.id'); // Đếm số lượng ID trong bảng assets

        $count_ai_24 = DB::table('assets as a')
            ->join('models as m', 'a.model_id', '=', 'm.id')
            ->join('categories as cat', 'm.category_id', '=', 'cat.id')
            ->join('status_labels as s', 'a.status_id', '=', 's.id')
            ->join('companies as c', 'a.company_id', '=', 'c.id')
            ->where('c.name', 'AI Cycle')
            ->where('s.name', 'Archived')
            ->where('cat.name', 'Mac Mini')
            ->count('a.id'); // Đếm số lượng ID trong bảng assets


    
        return view('count', 
            compact(
                'count_st_1',
                'count_st_2',
                'count_st_3',
                'count_st_4',
                'count_st_5',
                'count_st_6',
                'count_st_7',
                'count_st_8',
                'count_st_9',
                'count_st_10',
                'count_st_11',
                'count_st_12',
                'count_st_13',
                'count_st_14',
                'count_st_15',
                'count_st_16',
                'count_st_17',
                'count_st_18',
                'count_st_19',
                'count_st_20',
                'count_st_21',
                'count_st_22',
                'count_st_23',
                'count_st_24',
                'count_bl_1',
                'count_bl_2',
                'count_bl_3',
                'count_bl_4',
                'count_bl_5',
                'count_bl_6',
                'count_bl_7',
                'count_bl_8',
                'count_bl_9',
                'count_bl_10',
                'count_bl_11',
                'count_bl_12',
                'count_bl_13',
                'count_bl_14',
                'count_bl_15',
                'count_bl_16',
                'count_bl_17',
                'count_bl_18',
                'count_bl_19',
                'count_bl_20',
                'count_bl_21',
                'count_bl_22',
                'count_bl_23',
                'count_bl_24',
                'count_ai_1',
                'count_ai_2',
                'count_ai_3',
                'count_ai_4',
                'count_ai_5',
                'count_ai_6',
                'count_ai_7',
                'count_ai_8',
                'count_ai_9',
                'count_ai_10',
                'count_ai_11',
                'count_ai_12',
                'count_ai_13',
                'count_ai_14',
                'count_ai_15',
                'count_ai_16',
                'count_ai_17',
                'count_ai_18',
                'count_ai_19',
                'count_ai_20',
                'count_ai_21',
                'count_ai_22',
                'count_ai_23',
                'count_ai_24'
                
            ));
    }
    

}
