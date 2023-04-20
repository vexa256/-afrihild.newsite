<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\FormEngine;

// use Illuminate\Http\Request;

class CMSController extends Controller
{

    public function CMS_aboutAfriChild()
    {

        $FormEngine = new FormEngine;
        $rem        = [

            "created_at",
            "updated_at",
            "id",
            "UID",
            "AboutUsPhoto",

        ];

        $DatabaseData = DB::table('about_africhild')->get();

        $data = [
            'Title'        => 'AfriChild CMS Home',
            'Desc'         => 'Manage the AfriChild Website',
            'Page'         => 'About.MgtAbout',
            'DatabaseData' => $DatabaseData,
            'rem'          => $rem,
            'Form'         => $FormEngine->Form('about_africhild'),

        ];

        return view('cms', $data);
    }

    public function CMS_ourWork()
    {

        $FormEngine = new FormEngine;
        $rem        = [

            "created_at",
            "updated_at",
            "id",
            "UID",
            "AboutUsPhoto",
            "URL",

        ];

        $DatabaseData = DB::table('our_works')->get();

        $data = [
            'Title'        => 'AfriChild CMS Home',
            'Desc'         => 'Manage the AfriChild Website',
            'Page'         => 'OurWork.MgtOurWork',
            'DatabaseData' => $DatabaseData,
            'rem'          => $rem,
            'Form'         => $FormEngine->Form('our_works'),

        ];

        return view('cms', $data);
    }

    public function CMS_boardOfDirectors()
    {
        $FormEngine = new FormEngine;
        $rem        = [

            "created_at",
            "updated_at",
            "id",
            "UID",
            "AboutUsPhoto",
            "URL",

        ];

        $DatabaseData = DB::table('directors')->get();

        $data = [
            'Title'        => 'AfriChild CMS Home',
            'Desc'         => 'Manage the AfriChild Website',
            'Page'         => 'Directors.MgtDirectors',
            'DatabaseData' => $DatabaseData,
            'rem'          => $rem,
            'Form'         => $FormEngine->Form('directors'),

        ];

        return view('cms', $data);
    }

    public function CMS_theSecretariat()
    {
        $FormEngine = new FormEngine;
        $rem        = [

            "created_at",
            "updated_at",
            "id",
            "UID",
            "AboutUsPhoto",
            "URL",

        ];

        $DatabaseData = DB::table('sec_teams')->get();

        $data = [
            'Title'        => 'AfriChild CMS Home',
            'Desc'         => 'Manage the AfriChild Website',
            'Page'         => 'Sec.MgtSec',
            'DatabaseData' => $DatabaseData,
            'rem'          => $rem,
            'Form'         => $FormEngine->Form('sec_teams'),

        ];

        return view('cms', $data);
    }

    public function CMS_corePrograms()
    {
        $FormEngine = new FormEngine;
        $rem        = [

            "created_at",
            "updated_at",
            "id",
            "UID",
            "AboutUsPhoto",
            "URL",

        ];

        $DatabaseData = DB::table('program_areas')->get();

        $data = [
            'Title'        => 'AfriChild CMS Home',
            'Desc'         => 'Manage the AfriChild Website',
            'Page'         => 'Programs.MgtPrograms',
            'DatabaseData' => $DatabaseData,
            'rem'          => $rem,
            'Form'         => $FormEngine->Form('program_areas'),

        ];

        return view('cms', $data);
    }

    public function CMS_foundingPartners()
    {
        $FormEngine = new FormEngine;
        $rem        = [

            "created_at",
            "updated_at",
            "id",
            "UID",
            "AboutUsPhoto",
            "URL",

        ];

        $DatabaseData = DB::table('founders')->get();

        $data = [
            'Title'        => 'AfriChild CMS Home',
            'Desc'         => 'Manage the AfriChild Website',
            'Page'         => 'Founders.Founders',
            'DatabaseData' => $DatabaseData,
            'rem'          => $rem,
            'Form'         => $FormEngine->Form('founders'),

        ];

        return view('cms', $data);
    }

    public function CMS_researchAssociates()
    {
        $FormEngine = new FormEngine;
        $rem        = [

            "created_at",
            "updated_at",
            "id",
            "UID",
            "AboutUsPhoto",
            "URL",

        ];

        $DatabaseData = DB::table('assocs')->get();

        $data = [
            'Title'        => 'AfriChild CMS Home',
            'Desc'         => 'Manage the AfriChild Website',
            'Page'         => 'Assocs.MgtAssocs',
            'DatabaseData' => $DatabaseData,
            'rem'          => $rem,
            'Form'         => $FormEngine->Form('assocs'),

        ];

        return view('cms', $data);
    }

    public function CMS_promotingPartners()
    {
        $FormEngine = new FormEngine;
        $rem        = [

            "created_at",
            "updated_at",
            "id",
            "UID",
            "AboutUsPhoto",
            "URL",

        ];

        $DatabaseData = DB::table('partners')->get();

        $data = [
            'Title'        => 'AfriChild CMS Home',
            'Desc'         => 'Manage the AfriChild Website',
            'Page'         => 'Promoting.MgtPromoting',
            'DatabaseData' => $DatabaseData,
            'rem'          => $rem,
            'Form'         => $FormEngine->Form('partners'),

        ];

        return view('cms', $data);
    }

    public function CMS_affiliates()
    {
        $FormEngine = new FormEngine;
        $rem        = [

            "created_at",
            "updated_at",
            "id",
            "UID",
            "AboutUsPhoto",
            "URL",

        ];

        $DatabaseData = DB::table('affs')->get();

        $data = [
            'Title'        => 'AfriChild CMS Home',
            'Desc'         => 'Manage the AfriChild Website',
            'Page'         => 'Affs.MgtAffs',
            'DatabaseData' => $DatabaseData,
            'rem'          => $rem,
            'Form'         => $FormEngine->Form('affs'),

        ];

        return view('cms', $data);
    }

    public function CMS_gallery()
    {
        $FormEngine = new FormEngine;
        $rem        = [

            "created_at",
            "updated_at",
            "id",
            "UID",
            "AboutUsPhoto",
            "URL",

        ];

        $DatabaseData = DB::table('galleries')->get();

        $data = [
            'Title'        => 'AfriChild CMS Home',
            'Desc'         => 'Manage the AfriChild Website',
            'Page'         => 'Galleries.MgtGal',
            'DatabaseData' => $DatabaseData,
            'rem'          => $rem,
            'Form'         => $FormEngine->Form('galleries'),

        ];

        return view('cms', $data);
    }

    public function CMS_research()
    {
        $FormEngine = new FormEngine;
        $rem        = [

            "created_at",
            "updated_at",
            "id",
            "UID",
            "AboutUsPhoto",
            "URL",
            "Thumbnail",

        ];

        $DatabaseData = DB::table('research')->get();

        $data = [
            'Title'        => 'AfriChild CMS Home',
            'Desc'         => 'Manage the AfriChild Website',
            'Page'         => 'Res.MgtRes',
            'DatabaseData' => $DatabaseData,
            'rem'          => $rem,
            'Form'         => $FormEngine->Form('research'),

        ];

        return view('cms', $data);
    }

    public function CMS_reports()
    {
        $FormEngine = new FormEngine;
        $rem        = [

            "created_at",
            "updated_at",
            "id",
            "UID",
            "AboutUsPhoto",
            "URL",
            "Thumbnail",

        ];

        $DatabaseData = DB::table('reports')->get();

        $data = [
            'Title'        => 'AfriChild CMS Home',
            'Desc'         => 'Manage the AfriChild Website',
            'Page'         => 'Reports.MgtRep',
            'DatabaseData' => $DatabaseData,
            'rem'          => $rem,
            'Form'         => $FormEngine->Form('reports'),

        ];

        return view('cms', $data);
    }

    public function CMS_policyBriefs()
    {
        $FormEngine = new FormEngine;
        $rem        = [

            "created_at",
            "updated_at",
            "id",
            "UID",
            "AboutUsPhoto",
            "URL",
            "Thumbnail",

        ];

        $DatabaseData = DB::table('policies')->get();

        $data = [
            'Title'        => 'AfriChild CMS Home',
            'Desc'         => 'Manage the AfriChild Website',
            'Page'         => 'Pol.Pol',
            'DatabaseData' => $DatabaseData,
            'rem'          => $rem,
            'Form'         => $FormEngine->Form('policies'),

        ];

        return view('cms', $data);
    }

    public function UAC()
    {
        $FormEngine = new FormEngine;
        $rem        = [

            "created_at",
            "updated_at",
            "id",
            "UID",
            "AboutUsPhoto",
            "URL",
            "Thumbnail",
            "password",
            "remember_token",
            "EmpID",
            "email_verified_at",
            "Privileges",

        ];

        $DatabaseData = DB::table('users')->get();

        $data = [
            'Title'        => 'AfriChild CMS Home',
            'Desc'         => 'Manage the AfriChild Website',
            'Page'         => 'UAC.MgtUac',
            'DatabaseData' => $DatabaseData,
            'rem'          => $rem,
            'Form'         => $FormEngine->Form('users'),

        ];

        return view('cms', $data);
    }

    public function NewUser(Request $request)
    {
        $validatedData = $request->validate([
            'password'              => 'required|min:6|confirmed',
            'password_confirmation' => 'required|min:6',
        ]);

        DB::table($request->TableName)->insert(
            [
                "name"     => $request->name,
                "email"    => $request->email,
                "password" => \Hash::make($request->password),

            ]
        );

        return redirect()
            ->back()->with('status', 'Data inserted successfully.');

    }

    public function UpdateUser(Request $request)
    {
        $validatedData = $request->validate([
            'password'              => 'required|min:6|confirmed',
            'password_confirmation' => 'required|min:6',
        ]);

        DB::table($request->TableName)->where('id', $request->id)->update([

            "name"     => $request->name,
            "email"    => $request->email,
            "password" => \Hash::make($request->password),

        ]);

        return redirect()
            ->back()->with('status', 'Data inserted successfully.');

    }
}
