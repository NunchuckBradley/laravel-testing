<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class ApiHelper
{
    public $data;

    public static function getUsers()
    {
        $users = [
            ['userid' => 1, 'name' => 'Martin'],
            ['userid' => 2, 'name' => 'Bradley'],
        ];

        return $users;
    }

    public function getApiData()
    {
        $start = 1;
        $loop = true;
        while ($loop) {
            dd ($start);
            $response = Http::withUserAgent($userAgent)->get('https://reqres.in/api/users', ['page' => $start]);
            dd ('response');
            $page = json_decode($response->body());
            dd ($page->page);
            array_push($this->data, $page->data);

            if ($page->page <= $page->total_pages) {
                $start++;
            }
            else {
                $loop = false;
            }
        }
    }

    public function insertData()
    {
        foreach($this->data as &$value) {
            $insert = array(
                "id"=>$value->id,
                "first_name"=>$value->first_name,
                "last_name"=>$value->last_name,
                "email"=>$value->email,
                "avatar"=>$value->avatar
            );
            // insert, but use insertOrIgnore to ignore the non unique id/email lines, duplicates
            DB::table('import_users')->insertOrIgnore($insert);
        }
        return ['Imported users'];
    }

    public function loadData() 
    {
        $this->data = DB::select('select * from import_users');
    }

    public function removeData()
    {
        dd("Removing data");
        DB::table('import_users')->truncate();
        DB::table('import_users')->delete();
    }
}