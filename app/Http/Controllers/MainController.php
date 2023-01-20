<?php

namespace App\Http\Controllers;

use DB;
use Artesaos\SEOTools\Facades\SEOTools;

class MainController extends Controller
{

    private $Title = "The AfriChild Centre exists to generate research that informs policy and practice for the wellbeing of children. Vision - We strive for an Africa where children\'s wellbeing is realized for sustainable development.  ";

    public function __construct()
    {
        // // dd($_SERVER['SERVER_NAME']);
        // SitemapGenerator::create('http://AfriChild.or.ug')->writeToFile(public_path('sitemap.xml
        // '));

    }

    public function RunSEO($PageTitle, $Desc = null)
    {
        SEOTools::setTitle($PageTitle);

        if ($Desc == null) {
            SEOTools::setDescription($this->Title);
        } else {

            SEOTools::setDescription($Desc);
        }

        SEOTools::opengraph()->setUrl(url()->current());
        SEOTools::setCanonical(url()->full());
        SEOTools::opengraph()->addProperty('type', 'articles');
        SEOTools::twitter()->setSite('@AfriChildCenter');
        SEOTools::jsonLd()->addImage(url('img/logo.png'));
    }

    public function Afri_Child_Center_Makerere()
    {
        $this->RunSEO('The AfriChild Center Makerere');

        $Events     = DB::table('events')->take(3)->orderBy('id', 'DESC')->get();
        $Blogs      = DB::table('blogs')->take(3)->orderBy('id', 'DESC')->get();
        $Partners   = DB::table('partners')->get();
        $GlobalData = DB::table('research')
            ->where('id', '>=', '19')
            ->where('id', '<=', '21')

            ->inRandomOrder()->get();

        // dd($GlobalData);
        $data = [

            "Page"       => 'index.index',
            "Title"      => '',
            "Events"     => $Events,
            "Blogs"      => $Blogs,
            "Partners"   => $Partners,
            "GlobalData" => $GlobalData,

        ];

        return view('scrn', $data);
    }

    public function Afri_Child_Center_Makerere_Contact_Us()
    {
        $this->RunSEO('The AfriChild Center Makerere');

        $data = [

            "Page"  => 'contact.contact',
            "Title" => '',

        ];

        return view('scrn', $data);
    }

    public function AboutTheAfriChildCenterMakerere()
    {
        $this->RunSEO('About The AfriChild Center Makerere');

        $data = [

            "Page"  => 'about.about',
            "Title" => 'About The AfriChild Center Makerere',

        ];

        return view('scrn', $data);
    }

    public function OurWorkAtAfriChildCenterMakerere()
    {
        $this->RunSEO("Explore AfriChild\'s Work and Projects");

        $OurWork = DB::table('our_works')->orderBy('id', 'desc')->get();
        $data    = [

            "Page"    => 'work.work',
            "Title"   => 'Our Work - AfriChild Center Makerere',
            "OurWork" => $OurWork,

        ];

        return view('scrn', $data);
    }

    public function TheAfriChildCenterBoardOfDirectors()
    {
        $this->RunSEO("AfriChild Center Makerere - Board Of Directors");

        $Directors = DB::table('directors')->get();
        $data      = [

            "Page"      => 'directors.directors',
            "Title"     => 'Board of Directors - AfriChild Center Makerere',
            "Directors" => $Directors,

        ];

        return view('scrn', $data);
    }

    public function TheAfriChildSecretariatTeam()
    {
        $this->RunSEO("AfriChild Center Makerere - The Secretariat Team ");

        $GlobalData = DB::table('sec_teams')->get();
        $data       = [

            "Page"       => 'sec.sec',
            "Title"      => 'The Secretariat Team - AfriChild Center Makerere',
            "GlobalData" => $GlobalData,

        ];

        return view('scrn', $data);
    }

    public function TheAfriChildCoreProgramAreas()
    {
        $this->RunSEO("AfriChild Center Makerere - Our Core Program Areas ");

        $GlobalData = DB::table('program_areas')->get();
        $data       = [

            "Page"       => 'programs.programs',
            "Title"      => 'Core Program Areas- AfriChild Center Makerere',
            "GlobalData" => $GlobalData,

        ];

        return view('scrn', $data);
    }

    public function AfriChildFounders()
    {
        $this->RunSEO("AfriChild Center Makerere - Our Founders ");

        $GlobalData = DB::table('founders')->get();
        $data       = [

            "Page"       => 'founders.founders',
            "Title"      => 'Our Founders- AfriChild Center Makerere',
            "GlobalData" => $GlobalData,

        ];

        return view('scrn', $data);
    }

    public function AfriChildCenterMakerereResearchAssociates()
    {
        $this->RunSEO("AfriChild Center Makerere - Our Research Associates");

        $GlobalData = DB::table('assocs')->get();
        $data       = [

            "Page"       => 'res.res',
            "Title"      => 'Our Research Associates - AfriChild Center Makerere',
            "GlobalData" => $GlobalData,

        ];

        return view('scrn', $data);
    }

    public function AfriChildCenterMakerereAffiliates()
    {
        $this->RunSEO("AfriChild Center Makerere - Our Affiliates");

        $GlobalData = DB::table('affs')->get();
        $data       = [

            "Page"       => 'aff.aff',
            "Title"      => 'Our Affiliates - AfriChild Center Makerere',
            "GlobalData" => $GlobalData,

        ];

        return view('scrn', $data);
    }

    public function AfriChildPromotingPartners()
    {
        $this->RunSEO("AfriChild Center Makerere - Our Promoting Partners");

        $GlobalData = DB::table('partners')->get();
        $data       = [

            "Page"       => 'partners.partners',
            "Title"      => 'Our Promoting Partners - AfriChild Center Makerere',
            "GlobalData" => $GlobalData,

        ];

        return view('scrn', $data);

    }

    public function AfriChildResearchPublications()
    {
        $this->RunSEO("AfriChild Center Makerere - Our Research");

        $GlobalData = DB::table('research')->get();
        $data       = [

            "Page"       => 'research.research',
            "Title"      => 'Our Research - AfriChild Center Makerere',
            "GlobalData" => $GlobalData,

        ];

        return view('scrn', $data);

    }

    public function AfriChildCenterReports()
    {
        $this->RunSEO("AfriChild Center Makerere - Our Reports");

        $GlobalData = DB::table('reports')->get();
        $data       = [

            "Page"       => 'reports.report',
            "Title"      => 'Our Reports - AfriChild Center Makerere',
            "GlobalData" => $GlobalData,

        ];

        return view('scrn', $data);
    }

    public function AfriChildCenterPolicyBriefs()
    {
        $this->RunSEO("AfriChild Center Makerere - Our Policy Briefs");

        $GlobalData = DB::table('policies')->get();
        $data       = [

            "Page"       => 'policy.policy',
            "Title"      => 'Policy Briefs - AfriChild Center Makerere',
            "GlobalData" => $GlobalData,

        ];

        return view('scrn', $data);
    }

    public function AfriChildCenterGallery()
    {
        $this->RunSEO("AfriChild Center Makerere - Our Pictorial");

        $GlobalData = DB::table('galleries')->get();
        $data       = [

            "Page"       => 'gallery.gallery',
            "Title"      => 'Gallery - AfriChild Center Makerere',
            "GlobalData" => $GlobalData,
            "Photo"      => 'true',

        ];

        return view('scrn', $data);
    }

    public function AfriChildCenterBlogPosts()
    {
        $this->RunSEO("AfriChild Center Makerere - Our Blog");

        $GlobalData = DB::table('blogs')->orderBy('id', 'desc')->get();
        $News       = DB::table('news')->orderBy('id', 'desc')->get();
        $data       = [

            "Page"       => 'blog.Posts',
            "Title"      => 'Blog Posts - AfriChild Center Makerere',
            "GlobalData" => $GlobalData->shuffle(),
            "News"       => $News,
            // "Photo"      => 'true',

        ];

        return view('scrn', $data);
    }

    public function AfriChildBlogPostDetails($AfriChildBlogPost)
    {
        $GlobalData = DB::table('blogs')
            ->where('AfriChildBlogPost', $AfriChildBlogPost)->first();

        $this->RunSEO("Blog Post | " . $GlobalData->Title);

        $data = [

            "Page"       => 'blog.Details',
            "Title"      => "Blog Post | " . $GlobalData->Title,
            "GlobalData" => $GlobalData,
            // "News"       => $News,
            // "Photo"      => 'true',

        ];

        return view('scrn', $data);
    }

    public function AfriChildBlogNewsDetails($id)
    {
        $GlobalData = DB::table('news')
            ->where('id', $id)->first();

        $this->RunSEO("News Post | " . $GlobalData->Title);

        $data = [

            "Page"       => 'news.Details',
            "Title"      => "News Post | " . $GlobalData->Title,
            "GlobalData" => $GlobalData,
            // "News"       => $News,
            // "Photo"      => 'true',

        ];

        return view('scrn', $data);
    }

}
