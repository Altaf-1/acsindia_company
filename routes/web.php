<?php

use App\Course;
use App\Event;
use App\Order;
use App\Payment;
use App\Query;
use App\User;
use App\ApscCourses;
use App\ClassVideo;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController\Export\ExportController;
use App\Http\Controllers\ResultController;
use App\TestSeriesAssign;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController\HDFC\AdminHDFCOrdersController;
use App\Http\Controllers\AdminController\OutsideCourse\OutsideCourseController;
use App\Recorded;
use App\StudyMaterial;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//index demo pages

Route::get('/acs_toppers_answer', function () {
    return view('digipedia.toppers.index');
});


Route::get('/university', function () {
    return view('university');
});

Route::get('/uni', function () {
    return view('university1');
});

Route::get('/university-1', function () {
    return view('university3');
});

Route::get('/upsc1', function () {
    return view('university2');
});

Route::get('/index2', function () {
    return view('index2-demo');
});

Route::get('/demo', function () {
    return view('demo');
});

Route::get('/demo1', function () {
    return view('demo1');
});

Route::get('/demo2', function () {
    return view('demo2');
});

Route::get('/index_new', function () {
    return view('index_new');
});

Route::get('/upsc_demo', function () {
    return view('upsc_demo');
});

Route::get('/contact', function () {
    return view('demo.contact');
})->middleware('auth');

Route::get('/upsc', function () {
    return view('upsc');
})->middleware('auth');

Route::get('/index8', function () {
    return view('index8');
});

Route::get('/index9', function () {
    return view('index9');
});

Route::get('/upsc_demo', function () {
    return view('demo.upsc');
});

Route::get('/apsc1_demo', function () {
    return view('demo.apsc');
});

Route::get('/aboutus', function () {
    return view('demo.about');
})->middleware('auth');

Route::get('/index10', function () {
    return view('index1_demo');
});

Route::get('/acs_seminar', function () {
    return view('digipedia.event.seminar');
});

Route::get('/acs_webinar', function () {
    return view('digipedia.event.webinar');
});

Route::get('/current_affairs_2023', function () {
    return view('digipedia.current_affairs_2023');
})->middleware('auth');

Route::get('/daily_news_analysis', function () {
    return view('digipedia.daily_news_analysis');
})->middleware('auth');

Route::get('/index5', function () {
    return view('index5');
});

Route::get('/index4', function () {
    return view('index4-demo');
});

Route::get('/demo1', function () {
    return view('demo/all/index');
});

Route::get('/demo2', function () {
    return view('demo/all/index2-demo');
});


Route::get('/mains_toppers_answer/essay', function () {
    return view('digipedia.mains_toppers_answer.essay');
});

Route::get('/apsc', function () {
    $courses = ApscCourses::where('active', 1)->get();
    return view('index_3', compact('courses'));
})->name('apsc_course')->middleware('auth');

Route::get('/apsc-rank', function () {
    return redirect(route('apsc_course') . "#rank");
})->name('apsc_rank');


Route::get('/offline', function () {
    return view('courses/offline');
})->middleware('auth');

Route::get('/self-study/apsc', function () {
    return view('digipedia.self_study_apsc.index');
})->name('digipedia.self.study.apsc.index');


Route::get('/self-study', function () {
    return view('digipedia.self.index');
})->name('digipedia.self.index')->middleware('auth');

Route::get('/self-study/index', function () {
    return view('digipedia.self_study.index');
})->name('digipedia.self.index');

Route::get('/economy', function () {
    return view('digipedia.self_study.economy');
});
Route::get('/modern_history', function () {
    return view('digipedia.self_study.modern');
});

Route::get('/art & culture', function () {
    return view('digipedia.self_study.art');
});

Route::get('/polity', function () {
    return view('digipedia.self_study.polity');
});

Route::get('/geography_self', function () {
    return view('digipedia.self_study.geography');
});
Route::get('/ancient_india', function () {
    return view('digipedia.self_study.ancient_india');
});
Route::get('/medieval_india', function () {
    return view('digipedia.self_study.medieval_india');
});
Route::get('/ecology', function () {
    return view('digipedia.self_study.ecology');
});
Route::get('/science', function () {
    return view('digipedia.self_study.science');
});

//apsc pages

Route::get('/prelims_exam', function () {
    return view('digipedia.prelims');
});

Route::get('/assam-apsc-prelims-pyq', function () {
    return view('digipedia.apsc.apsc_prelims');
});

Route::get('/apsc-ncert-books', function () {
    return view('digipedia.apsc.apsc_ncert');
});

Route::get('/2+2_session', function () {
    return view('digipedia.apsc.2+2');
});

Route::get('/prime_session', function () {
    return view('digipedia.apsc.prime');
});

Route::get('/rrr_session', function () {
    return view('digipedia.apsc.rrr');
});
Route::get('/toppers_session', function () {
    return view('digipedia.apsc.toppers');
});
Route::get('/tips_tricks_session', function () {
    return view('digipedia.apsc.tips_tricks');
});

Route::get('/apsc_probable_question', function () {
    $datas = TestSeriesAssign::where('course_name', 'all')->get();
    return view('digipedia.apsc.probable_question', compact('datas'));
});

Route::get('/', function () {
    $events = Event::where('status', 1)->get();
    $courses = \App\Course::where('active', 1)->latest()->get();
    $recorded_courses = \App\Recorded::where('active', 1)->latest()->get();
    $user = Auth::user();
    $apsc_interview_course = \App\ApscCourses::where('title', 'APSC 2023 INTERVIEW PREPARATION')->get()->first();
    return view('index', compact('events', 'courses', 'recorded_courses', 'user', 'apsc_interview_course'));
})->name('root');

Route::get('/get-user-coupon-page', [\App\Http\Controllers\UserCoupon::class, 'getCouponGeneratePage'])->name('get-user-coupon-page');

Route::post('/store-user-coupon', [\App\Http\Controllers\UserCoupon::class, 'generateUserCoupon'])->name('store-user-coupon');

Route::get('/onlinequiz', function () {
    return view('ability.onlinequiz');
});
Route::get('/indian_polityquiz', function () {
    return view('ability.indian_polityquiz');
});
Route::get('/art&culturequiz', function () {
    return view('ability.art&culturequiz');
});
Route::get('/Env&Ecoquiz', function () {
    return view('ability.Env&Ecoquiz');
});
Route::get('/geographyquiz', function () {
    return view('ability.geographyquiz');
});
Route::get('/indian_Economyquiz', function () {
    return view('ability.indian_Economyquiz');
});
Route::get('/Modern_Indiaquiz', function () {
    return view('ability.Modern_Indiaquiz');
});
Route::get('/test1', function () {
    return view('ability.test1');
});
Route::get('/test2', function () {
    return view('ability.test2');
});
Route::get('/test3', function () {
    return view('ability.test3');
});
Route::get('/tips&tricks', function () {
    return view('tips.tips&tricks');
});
Route::get('/digipedia', function () {
    return view('digipedia.degipedia');
});
Route::get('/art&culture', function () {
    return view('digipedia.art&culture');
});
Route::get('/geography', function () {
    return view('digipedia.geography');
});
Route::get('/indian_economy', function () {
    return view('digipedia.indian_economy');
});
Route::get('/indian_history', function () {
    return view('digipedia.indian_history');
});
Route::get('/indian_polity', function () {
    return view('digipedia.indian_polity');
});

Route::get('/acsall', function () {
    return view('digipedia.acsall');
})->middleware('auth');

Route::get('/pyq_all', function () {
    return view('digipedia.pyq_all');
})->middleware('auth');

Route::get('/upsc_pyq', function () {
    return view('digipedia.upsc_pyq');
})->middleware('auth');

Route::get('/sample_material', function () {
    return view('digipedia.sample_material');
})->middleware('auth');

Route::get('/prelims_important', function () {
    return view('digipedia.important');
})->middleware('auth');

Route::get('/Probable_Question', function () {
    return view('digipedia.probable');
})->middleware('auth');

Route::get('/apsc_pyq', function () {
    return view('digipedia.pyq');
})->middleware('auth');

Route::get('/pyq_gs1', function () {
    return view('digipedia.pyq_gs1');
})->middleware('auth');

Route::get('/pyq_gs2', function () {
    return view('digipedia.pyq_gs2');
})->middleware('auth');

Route::get('/apscall', function () {
    return view('digipedia.apscall');
})->middleware('auth');

Route::get('/syllabus', function () {
    return view('digipedia.syllabus.syllabus');
})->middleware('auth');
Route::get('/prelims', function () {
    return view('digipedia.syllabus.prelims');
});
Route::get('/mains', function () {
    return view('digipedia.syllabus.mains');
});
Route::get('/optionals', function () {
    return view('digipedia.syllabus.optionals');
});

Route::get('/previous', function () {
    return view('digipedia.Questions.paper');
})->middleware('auth');
Route::get('/qprelims', function () {
    return view('digipedia.Questions.qprelims');
});
Route::get('/qmains', function () {
    return view('digipedia.Questions.qmains');
});
Route::get('/qpaper1', function () {
    return view('digipedia.Questions.paper1');
});
Route::get('/qpaper2', function () {
    return view('digipedia.Questions.paper2');
});
Route::get('/qessay', function () {
    return view('digipedia.Questions.essay');
});
Route::get('/gs1', function () {
    return view('digipedia.Questions.gs1');
});
Route::get('/gs2', function () {
    return view('digipedia.Questions.gs2');
});
Route::get('/gs3', function () {
    return view('digipedia.Questions.gs3');
});
Route::get('/gs4', function () {
    return view('digipedia.Questions.gs4');
});
Route::get('/qoptionals', function () {
    return view('digipedia.Questions.qoptionals');
});
Route::get('/science-topic', function () {
    return view('digipedia.science.topic');
});
Route::get('/class-11', function () {
    return view('digipedia.science.class-11');
});
Route::get('/phy-sub', function () {
    return view('digipedia.science.phy-sub');
});
Route::get('/che-sub', function () {
    return view('digipedia.science.che-sub');
});
Route::get('/class-12', function () {
    return view('digipedia.science.class-12');
});
Route::get('/phy12-sub', function () {
    return view('digipedia.science.phy12-sub');
});
Route::get('/che12-sub', function () {
    return view('digipedia.science.che12-sub');
});
Route::get('/for_mains', function () {
    return view('digipedia.Questions.for_mains');
});

/*optionals subjects*/
Route::get('/agri', function () {
    return view('digipedia.optionals.agri');
});
Route::get('/animal', function () {
    return view('digipedia.optionals.animal');
});
Route::get('/anth', function () {
    return view('digipedia.optionals.anth');
});
Route::get('/assamese', function () {
    return view('digipedia.optionals.assamese');
});
Route::get('/bengali', function () {
    return view('digipedia.optionals.bengali');
});
Route::get('/bodo', function () {
    return view('digipedia.optionals.bodo');
});
Route::get('/acs2020', function () {
    return view('digipedia.acs2020');
});
Route::get('/acsyear', function () {
    return view('digipedia.acsyear');
})->middleware('auth');
Route::get('/botany', function () {
    return view('digipedia.optionals.botany');
});
Route::get('/chemistry', function () {
    return view('digipedia.optionals.chemistry');
});
Route::get('/civil', function () {
    return view('digipedia.optionals.civil');
});
Route::get('/comm', function () {
    return view('digipedia.optionals.comm');
});
Route::get('/dogri', function () {
    return view('digipedia.optionals.dogri');
});
Route::get('/eco', function () {
    return view('digipedia.optionals.eco');
});
Route::get('/electrical', function () {
    return view('digipedia.optionals.electrical');
});
Route::get('/english', function () {
    return view('digipedia.optionals.english');
});
Route::get('/geo', function () {
    return view('digipedia.optionals.geo');
});
Route::get('/geol', function () {
    return view('digipedia.optionals.geol');
});
Route::get('/guj', function () {
    return view('digipedia.optionals.guj');
});
Route::get('/hindi', function () {
    return view('digipedia.optionals.hindi');
});
Route::get('/history', function () {
    return view('digipedia.optionals.history');
});
Route::get('/kannanda', function () {
    return view('digipedia.optionals.kannanda');
});
Route::get('/kashmiri', function () {
    return view('digipedia.optionals.kashmiri');
});
Route::get('/konkani', function () {
    return view('digipedia.optionals.konkani');
});
Route::get('/law', function () {
    return view('digipedia.optionals.law');
});
Route::get('/maithaili', function () {
    return view('digipedia.optionals.maithaili');
});
Route::get('/malaya', function () {
    return view('digipedia.optionals.malaya');
});
Route::get('/management', function () {
    return view('digipedia.optionals.management');
});
Route::get('/manipuri', function () {
    return view('digipedia.optionals.manipuri');
});
Route::get('/marathi', function () {
    return view('digipedia.optionals.marathi');
});
Route::get('/mathe', function () {
    return view('digipedia.optionals.mathe');
});
Route::get('/mecha', function () {
    return view('digipedia.optionals.mecha');
});
Route::get('/med', function () {
    return view('digipedia.optionals.med');
});
Route::get('/nepali', function () {
    return view('digipedia.optionals.nepali');
});
Route::get('/odia', function () {
    return view('digipedia.optionals.odia');
});
Route::get('/phil', function () {
    return view('digipedia.optionals.phil');
});
Route::get('/phy', function () {
    return view('digipedia.optionals.phy');
});
Route::get('/psy', function () {
    return view('digipedia.optionals.psy');
});
Route::get('/political', function () {
    return view('digipedia.optionals.political');
});
Route::get('/public-adminis', function () {
    return view('digipedia.optionals.public');
});
Route::get('/punjabi', function () {
    return view('digipedia.optionals.punjabi');
});
Route::get('/san', function () {
    return view('digipedia.optionals.san');
});
Route::get('/sand', function () {
    return view('digipedia.optionals.sand');
});
Route::get('/sank', function () {
    return view('digipedia.optionals.sank');
});
Route::get('/sant', function () {
    return view('digipedia.optionals.sant');
});
Route::get('/socio', function () {
    return view('digipedia.optionals.socio');
});
Route::get('/statis', function () {
    return view('digipedia.optionals.statis');
});
Route::get('/tamil', function () {
    return view('digipedia.optionals.tamil');
});
Route::get('/telegu', function () {
    return view('digipedia.optionals.telegu');
});
Route::get('/urdu', function () {
    return view('digipedia.optionals.urdu');
});
Route::get('/zoo', function () {
    return view('digipedia.optionals.zoo');
});

/*papers*/
Route::get('/agripaper1', function () {
    return view('digipedia.optionals.papers.agripaper1');
});
Route::get('/agripaper2', function () {
    return view('digipedia.optionals.papers.agripaper2');
});
Route::get('/animalpaper1', function () {
    return view('digipedia.optionals.papers.animalpaper1');
});
Route::get('/animalpaper2', function () {
    return view('digipedia.optionals.papers.animalpaper2');
});
Route::get('/anthpaper1', function () {
    return view('digipedia.optionals.papers.anthpaper1');
});
Route::get('/anthpaper2', function () {
    return view('digipedia.optionals.papers.anthpaper2');
});
Route::get('/assa1', function () {
    return view('digipedia.optionals.papers.assa1');
});
Route::get('/assa2', function () {
    return view('digipedia.optionals.papers.assa2');
});
Route::get('/ben1', function () {
    return view('digipedia.optionals.papers.ben1');
});
Route::get('/ben2', function () {
    return view('digipedia.optionals.papers.ben2');
});
Route::get('/bodo1', function () {
    return view('digipedia.optionals.papers.bodo1');
});
Route::get('/bodo2', function () {
    return view('digipedia.optionals.papers.bodo2');
});
Route::get('/bot1', function () {
    return view('digipedia.optionals.papers.bot1');
});
Route::get('/bot2', function () {
    return view('digipedia.optionals.papers.bot2');
});
Route::get('/che1', function () {
    return view('digipedia.optionals.papers.che1');
});
Route::get('/che2', function () {
    return view('digipedia.optionals.papers.che2');
});
Route::get('/civil1', function () {
    return view('digipedia.optionals.papers.civil1');
});
Route::get('/civil2', function () {
    return view('digipedia.optionals.papers.civil2');
});
Route::get('/comm1', function () {
    return view('digipedia.optionals.papers.comm1');
});
Route::get('/comm2', function () {
    return view('digipedia.optionals.papers.comm2');
});
Route::get('/dogri1', function () {
    return view('digipedia.optionals.papers.dogri1');
});
Route::get('/dogri2', function () {
    return view('digipedia.optionals.papers.dogri2');
});
Route::get('/eco1', function () {
    return view('digipedia.optionals.papers.eco1');
});
Route::get('/eco2', function () {
    return view('digipedia.optionals.papers.eco2');
});
Route::get('/electrical1', function () {
    return view('digipedia.optionals.papers.electrical1');
});
Route::get('/electrical2', function () {
    return view('digipedia.optionals.papers.electrical2');
});
Route::get('/english1', function () {
    return view('digipedia.optionals.papers.english1');
});
Route::get('/english2', function () {
    return view('digipedia.optionals.papers.english2');
});
Route::get('/geo1', function () {
    return view('digipedia.optionals.papers.geo1');
});
Route::get('/geo2', function () {
    return view('digipedia.optionals.papers.geo2');
});
Route::get('/geol1', function () {
    return view('digipedia.optionals.papers.geol1');
});
Route::get('/geol2', function () {
    return view('digipedia.optionals.papers.geol2');
});
Route::get('/guj1', function () {
    return view('digipedia.optionals.papers.guj1');
});
Route::get('/guj2', function () {
    return view('digipedia.optionals.papers.guj2');
});
Route::get('/hindi1', function () {
    return view('digipedia.optionals.papers.hindi1');
});
Route::get('/hindi2', function () {
    return view('digipedia.optionals.papers.hindi2');
});
Route::get('/history1', function () {
    return view('digipedia.optionals.papers.history1');
});
Route::get('/history2', function () {
    return view('digipedia.optionals.papers.history2');
});

Route::get('/kann1', function () {
    return view('digipedia.optionals.papers.kann1');
});
Route::get('/kann2', function () {
    return view('digipedia.optionals.papers.kann2');
});

Route::get('/kash1', function () {
    return view('digipedia.optionals.papers.kash1');
});
Route::get('/kash2', function () {
    return view('digipedia.optionals.papers.kash2');
});

Route::get('/kon1', function () {
    return view('digipedia.optionals.papers.kon1');
});
Route::get('/kon2', function () {
    return view('digipedia.optionals.papers.kon2');
});

Route::get('/law1', function () {
    return view('digipedia.optionals.papers.law1');
});
Route::get('/law2', function () {
    return view('digipedia.optionals.papers.law2');
});

Route::get('/mait1', function () {
    return view('digipedia.optionals.papers.mait1');
});
Route::get('/mait2', function () {
    return view('digipedia.optionals.papers.mait2');
});

Route::get('/mala1', function () {
    return view('digipedia.optionals.papers.mala1');
});
Route::get('/mala2', function () {
    return view('digipedia.optionals.papers.mala2');
});

Route::get('/mana1', function () {
    return view('digipedia.optionals.papers.mana1');
});
Route::get('/mana2', function () {
    return view('digipedia.optionals.papers.mana2');
});

Route::get('/mani1', function () {
    return view('digipedia.optionals.papers.mani1');
});
Route::get('/mani2', function () {
    return view('digipedia.optionals.papers.mani2');
});

Route::get('/mara1', function () {
    return view('digipedia.optionals.papers.mara1');
});
Route::get('/mara2', function () {
    return view('digipedia.optionals.papers.mara2');
});

Route::get('/mat1', function () {
    return view('digipedia.optionals.papers.mat1');
});
Route::get('/mat2', function () {
    return view('digipedia.optionals.papers.mat2');
});

Route::get('/mec1', function () {
    return view('digipedia.optionals.papers.mec1');
});
Route::get('/mec2', function () {
    return view('digipedia.optionals.papers.mec2');
});

Route::get('/med1', function () {
    return view('digipedia.optionals.papers.med1');
});
Route::get('/med2', function () {
    return view('digipedia.optionals.papers.med2');
});

Route::get('/nep1', function () {
    return view('digipedia.optionals.papers.nep1');
});
Route::get('/nep2', function () {
    return view('digipedia.optionals.papers.nep2');
});

Route::get('/mat1', function () {
    return view('digipedia.optionals.papers.mat1');
});
Route::get('/mat2', function () {
    return view('digipedia.optionals.papers.mat2');
});

Route::get('/mec1', function () {
    return view('digipedia.optionals.papers.mec1');
});
Route::get('/mec2', function () {
    return view('digipedia.optionals.papers.mec2');
});

Route::get('/med1', function () {
    return view('digipedia.optionals.papers.med1');
});
Route::get('/med2', function () {
    return view('digipedia.optionals.papers.med2');
});

Route::get('/nep1', function () {
    return view('digipedia.optionals.papers.nep1');
});
Route::get('/nep2', function () {
    return view('digipedia.optionals.papers.nep2');
});

Route::get('/odia1', function () {
    return view('digipedia.optionals.papers.odia1');
});
Route::get('/odia2', function () {
    return view('digipedia.optionals.papers.odia2');
});

Route::get('/phi1', function () {
    return view('digipedia.optionals.papers.phi1');
});
Route::get('/phi2', function () {
    return view('digipedia.optionals.papers.phi2');
});

Route::get('/phy1', function () {
    return view('digipedia.optionals.papers.phy1');
});
Route::get('/phy2', function () {
    return view('digipedia.optionals.papers.phy2');
});

Route::get('/pol1', function () {
    return view('digipedia.optionals.papers.pol1');
});
Route::get('/pol2', function () {
    return view('digipedia.optionals.papers.pol2');
});

Route::get('/psy1', function () {
    return view('digipedia.optionals.papers.psy1');
});
Route::get('/psy2', function () {
    return view('digipedia.optionals.papers.psy2');
});

Route::get('/public1', function () {
    return view('digipedia.optionals.papers.public1');
});
Route::get('/public2', function () {
    return view('digipedia.optionals.papers.public2');
});

Route::get('/punjai1', function () {
    return view('digipedia.optionals.papers.punjai1');
});
Route::get('/punjai2', function () {
    return view('digipedia.optionals.papers.punjai2');
});

Route::get('/san1', function () {
    return view('digipedia.optionals.papers.san1');
});
Route::get('/san2', function () {
    return view('digipedia.optionals.papers.san2');
});

Route::get('/sand1', function () {
    return view('digipedia.optionals.papers.sand1');
});
Route::get('/sand2', function () {
    return view('digipedia.optionals.papers.sand2');
});

Route::get('/sant1', function () {
    return view('digipedia.optionals.papers.sant1');
});
Route::get('/sant2', function () {
    return view('digipedia.optionals.papers.sant2');
});

Route::get('/sank1', function () {
    return view('digipedia.optionals.papers.sank1');
});
Route::get('/sank2', function () {
    return view('digipedia.optionals.papers.sank2');
});

Route::get('/soci1', function () {
    return view('digipedia.optionals.papers.soci1');
});
Route::get('/soci2', function () {
    return view('digipedia.optionals.papers.soci2');
});

Route::get('/stat1', function () {
    return view('digipedia.optionals.papers.stat1');
});
Route::get('/stat2', function () {
    return view('digipedia.optionals.papers.stat2');
});
Route::get('/tamil1', function () {
    return view('digipedia.optionals.papers.tamil1');
});
Route::get('/tamil2', function () {
    return view('digipedia.optionals.papers.tamil2');
});
Route::get('/telegu1', function () {
    return view('digipedia.optionals.papers.telegu1');
});
Route::get('/telegu2', function () {
    return view('digipedia.optionals.papers.telegu2');
});
Route::get('/urdu1', function () {
    return view('digipedia.optionals.papers.urdu1');
});
Route::get('/urdu2', function () {
    return view('digipedia.optionals.papers.urdu2');
});
Route::get('/zoo1', function () {
    return view('digipedia.optionals.papers.zoo1');
});
Route::get('/zoo2', function () {
    return view('digipedia.optionals.papers.zoo2');
});




Route::get('/home', 'HomeController@index')->name('home');


Route::get('/query', 'HomeController@query')->name('query');

Route::resource('/user', 'UserController', ['names' => [
    'index' => 'user.index',
    'create' => 'user.create',
    'show' => 'user.show',
    'edit' => 'user.edit'
]]);
Route::patch('/user/update/RollNo', [UserController::class, 'updateRollNo'])->name('user.updateRollNo');

Route::post('user/{id}/update', 'UserController@update')->name('user.update');
Route::post('user/{id}/update/subject', 'UserController@subject')->name('user.update.subject');
//graph
Route::get(
    "user/result-graph/show",
    "UserController@resultGraph"
)
    ->name('user.result-graph.show');

Auth::routes();

Route::get('password/check', 'Auth\LoginController@check')->name('password.check');
Route::post('password/confirm', 'Auth\LoginController@confirm')->name('password.confirm');
Route::post('password/change', 'Auth\LoginController@change')->name('password.change');



// Admin auth routes
Route::group(['middleware' => ['auth', 'admin']], function () {

    // admin
    Route::get('/admin', 'AdminController\AdminDashboardController@index')->name('admin.index');

    Route::get('admin/class/video/unique', 'AdminController\AdminClassVideoController@unique')->name('admin.video.unique');
    Route::resource('admin/class/video', 'AdminController\AdminClassVideoController', ['names' => [
        'index' => 'admin.video.index',
        'create' => 'admin.video.create',
        'store' => 'admin.video.store',
        'edit' => 'admin.video.edit',
        'show' => 'admin.video.show',
        'update' => 'admin.video.update',
        'delete' => 'video.destroy'
    ]]);



    //admins index
    Route::get('/admin/admins', function () {
        $search = request()->get('searchUser');
        if ($search) {
            $users = User::where('role', 'admin')->where("name", "LIKE", "%{$search}%")->paginate(10);
        } else {
            $users = User::where('role', 'admin')->paginate(10);
        }
        return view('admin.admins.index', compact('users'));
    })->name('admin.admins.index');

    // Admin User controller
    Route::resource('admin/users', 'AdminController\AdminUsersController', ['names' => [
        'index' => 'admin.users.index',
        'edit' => 'admin.users.edit',
        'update' => 'admin.users.update'
    ]]);

    Route::get('admin/subject', 'AdminController\AdminUsersController@subjectIndex')->name('admin.subjects.index');


    // routes to change password of user
    Route::get('admin/user/{id}/change_password', 'AdminController\AdminUsersController@change_password')->name('admin.users.change_password');
    Route::patch('admin/user/{id}/change', 'AdminController\AdminUsersController@change')->name('admin.users.change');
    Route::get('admin/course/user/nil', 'AdminController\AdminUsersController@nil_course')->name('admin.course.user.nil');


    // route to change password of admin
    Route::get('admin/user/{id}/password_admin', 'AdminController\AdminUsersController@password_admin')->name('admin.users.password_admin');
    Route::patch('admin/user/{id}/change_admin', 'AdminController\AdminUsersController@change_admin')->name('admin.users.change_admin');

    // admin course
    Route::resource('admin/course', 'AdminController\AdminCourseController', ['names' => [
        'index' => 'admin.course.index',
        'create' => 'admin.course.create',
        'store' => 'admin.course.store',
        'edit' => 'admin.course.edit',
        'show' => 'admin.course.show',
        'update' => 'admin.course.update'
    ]]);

    Route::resource('admin/apsccourses', 'AdminController\Apsc\AdminApscCoursesController', ['names' => [
        'index' => 'admin.apsccourses.index',
        'create' => 'admin.apsccourses.create',
        'store' => 'admin.apsccourses.store',
        'edit' => 'admin.apsccourses.edit',
        'show' => 'admin.apsccourses.show',
        'update' => 'admin.apsccourses.update'
    ]]);
    // admin events
    Route::resource('admin/event', 'AdminController\AdminEventController', ['names' => [
        'index' => 'admin.event.index',
        'create' => 'admin.event.create',
        'store' => 'admin.event.store',
        'edit' => 'admin.event.edit',
        'show' => 'admin.event.show',
        'update' => 'admin.event.update'
    ]]);


    Route::get('admin/coupon/bulk_coupon_create', [\App\Http\Controllers\AdminController\AdminCouponController::class, 'bulk_coupon_create'])
        ->name('admin.coupon.bulk_coupon_create');
    Route::post('admin/coupon/bulk_coupon_store', [\App\Http\Controllers\AdminController\AdminCouponController::class, 'bulk_coupon_store'])
        ->name('admin.coupon.bulk_coupon_store');
    Route::get('admin/coupon/bulk_coupon_delete', [\App\Http\Controllers\AdminController\AdminCouponController::class, 'bulk_coupon_delete_create'])
        ->name('admin.coupon.bulk_coupon_delete');
    Route::post('admin/coupon/bulk_coupon_delete', [\App\Http\Controllers\AdminController\AdminCouponController::class, 'bulk_coupon_delete'])
        ->name('admin.coupon.bulk_coupon_delete');
    Route::resource('admin/coupon', 'AdminController\AdminCouponController', ['names' => [
        'index' => 'admin.coupon.index',
        'create' => 'admin.coupon.create',
        'store' => 'admin.coupon.store',
        'edit' => 'admin.coupon.edit',
        'show' => 'admin.coupon.show',
        'update' => 'admin.coupon.update'
    ]]);

    Route::get('admin/coupon/send/{id}', 'AdminController\AdminCouponController@send_coupon')->name('admin.coupon.send');



    Route::resource('admin/course_payment/', 'AdminController\AdminCoursePaymentController', ['names' => [
        'index' => 'admin.course_payment.index',
        'create' => 'admin.course_payment.create',
        'store' => 'admin.course_payment.store',
        'edit' => 'admin.course_payment.edit',
        'show' => 'admin.course_payment.show',
        'update' => 'admin.course_payment.update'
    ]]);

    Route::patch('admin/course_payment/allow/{id}', 'AdminController\AdminCoursePaymentController@allow')
        ->name('admin.course_payment.allow');

    Route::get('admin/course_payment/pending', 'AdminController\AdminCoursePaymentController@pending')
        ->name('admin.course_payment.pending');

    Route::get('admin/course_payment/processed', 'AdminController\AdminCoursePaymentController@processed')
        ->name('admin.course_payment.processed');

    // APSC course Bank requests
    Route::patch('admin/apsc/course_payment/allow/{id}', 'AdminController\Apsc\AdminApscPaymentController@allow')
        ->name('admin.apsc.course_payment.allow');

    Route::get('admin/apsc/course_payment/pending', 'AdminController\Apsc\AdminApscPaymentController@pending')
        ->name('admin.apsc.course_payment.pending');

    Route::get('admin/apsc/course_payment/processed', 'AdminController\Apsc\AdminApscPaymentController@processed')
        ->name('admin.apsc.course_payment.processed');

    // payment delete

    Route::delete('admin/apsc/course_payment/delete/{id}', 'AdminController\Apsc\AdminApscPaymentController@destroy')
        ->name('admin.apsc.course_payment.delete');

    Route::delete('admin/course_payment/delete/{id}', 'AdminController\AdminCoursePaymentController@destroy')
        ->name('admin.course_payment.delete');


    //active event admin
    Route::post('admin/event/{id}/isactive', 'AdminController\AdminEventController@isactive')->name('admin.event.isactive');


    //admin queries checking
    Route::get('admin/queries', function () {
        $search = request()->get('searchUser');

        if ($search) {
            $queries = Query::where("name", "LIKE", "%{$search}%")->paginate(10);
        } else {
            $queries = Query::latest()->paginate(10);
        }
        return view('admin.queries.index', compact('queries'));
    })->name('admin.queries.index');

    Route::get('admin/query/resolve/{id}', function ($id) {
        $query = Query::findOrFail($id);
        $query->update([
            'status' => 'resolved'
        ]);

        session()->flash('success', 'Query is Resolved :)');
        return redirect()->back();
    })->name('admin.query.resolve');

    Route::get('admin/user/course', 'AdminController\AdminUsersController@usercourse')->name('admin.user.course');

    Route::get('admin/user/events', 'AdminController\AdminUsersController@userevent')->name('admin.user.event');

    Route::get('user/course/allot', 'AdminController\AdminUsersController@allot')->name('user.course.allot');


    //admin orders
    Route::get('admin/orders/create', 'AdminController\AdminOrderController@create')->name('admin.orders.create');
    Route::get('admin/orders/success', 'AdminController\AdminOrderController@success')->name('admin.orders.success');

    Route::get('admin/orders/{id}/allow', 'AdminController\AdminOrderController@allow')->name('admin.orders.allow');
    //   user course Details
    Route::get('admin/usercoursedetails', 'AdminController\AdminUserCourseDetailController@index')->name('admin.usercoursedetail.index');

    Route::get('admin/usercoursedetails/apsc', 'AdminController\AdminUserCourseDetailController@apscindex')->name('admin.usercoursedetail.apsc.index');

    Route::delete('admin/order/{id}/destroy', 'AdminController\AdminOrderController@destroy_order')->name('admin.orders.destroy');




    //show the users who have bought APSC courses
    Route::get('admin/user/apsc/course', 'AdminController\AdminUsersController@user_apsc_course')->name('admin.user.apsc.course');

    //admin orders APSC
    Route::get('admin/apsc/orders/create', 'AdminController\Apsc\AdminApscOrderController@create')->name('admin.apsc.orders.create');
    Route::get('admin/apsc/orders/success', 'AdminController\Apsc\AdminApscOrderController@success')->name('admin.apsc.orders.success');
    Route::get('admin/apsc/orders/{id}/allow', 'AdminController\Apsc\AdminApscOrderController@allow')->name('admin.apsc.orders.allow');
    Route::delete('admin/apsc/order/{id}/destroy', 'AdminController\Apsc\AdminApscOrderController@destroy_order')->name('admin.apsc.orders.destroy');
    Route::delete('admin/user/course/delete/{id}', 'AdminController\AdminUsersController@usercourseDestroy')->name('admin.user.course.delete');

    Route::delete('admin/user/apsccourse/delete/{id}', 'AdminController\AdminUsersController@userapsccourseDestroy')->name('admin.user.apsccourse.delete');
    Route::delete('admin/apsc/course_payment/delete/{id}', 'AdminController\Apsc\AdminApscPaymentController@destroy')->name('admin.apsc.course_payment.delete');


    Route::get('admin/feedback/index', 'FeedbackController@index')->name('admin.feedback.index')
        ->middleware('auth', 'admin');
    Route::delete('admin/feedback/delete/{id}', 'FeedbackController@destroy')->name('admin.feedback.destroy')
        ->middleware('auth', 'admin');
    Route::get('admin/course/apsc/allot', 'AdminController\Apsc\AdminApscCoursesController@apscAllot')->name('admin.apsc.allot');

    //    admin invoice control
    Route::get('admin/invoice/razorpay', 'AdminController\AdminInvoiceController@razporpayindex')->name('admin.invoice.razorpay.index');
    Route::get('admin/invoice/bank', 'AdminController\AdminInvoiceController@bankindex')->name('admin.invoice.bank.index');
    Route::get('admin/invoice/{payment_id}', 'AdminController\AdminInvoiceController@show')->name('admin.invoice.show');
    Route::delete('admin/invoice/delete/{payment_id}', 'AdminController\AdminInvoiceController@destroy')->name('admin.invoice.destroy');

    Route::resource('admin/test', 'AdminController\AdminTestController', ['names' => [
        'index' => 'admin.test.index',
        'create' => 'admin.test.create',
        'store' => 'admin.test.store',
        'edit' => 'admin.test.edit',
        'show' => 'admin.test.show',
        'update' => 'admin.test.update',
        'delete' => 'test.destroy'
    ]]);

    Route::post('admin/test/unique', 'AdminController\AdminTestController@unique')->name('admin.test.unique');


    //admin result
    Route::resource('admin/result', 'AdminController\AdminResultController', ['names' => [
        'index' => 'admin.result.index',
        'create' => 'admin.result.create',
        'store' => 'admin.result.store',
        'edit' => 'admin.result.edit',
        'show' => 'admin.result.show',
        'update' => 'admin.result.update'
    ]]);


    //study material
    Route::resource('admin/studymaterial', 'AdminController\StudyMaterial\AdminStudyMaterialController', ['names' => [
        'index' => 'admin.studymaterial.index',
        'create' => 'admin.studymaterial.create',
        'store' => 'admin.studymaterial.store',
        'edit' => 'admin.studymaterial.edit',
        'show' => 'admin.studymaterial.show',
        'update' => 'admin.studymaterial.update'
    ]]);

    // study material course Bank requests
    Route::patch('admin/studymaterial/course_payment/allow/{id}', 'AdminController\StudyMaterial\AdminStudyMaterialPaymentController@allow')
        ->name('admin.studymaterial.course_payment.allow');

    Route::get('admin/studymaterial/course_payment/pending', 'AdminController\StudyMaterial\AdminStudyMaterialPaymentController@pending')
        ->name('admin.studymaterial.course_payment.pending');

    Route::get('admin/studymaterial/course_payment/processed', 'AdminController\StudyMaterial\AdminStudyMaterialPaymentController@processed')
        ->name('admin.studymaterial.course_payment.processed');

    // payment delete
    Route::delete('admin/studymaterial/course_payment/delete/{id}', 'AdminController\StudyMaterial\AdminStudyMaterialPaymentController@destroy')
        ->name('admin.studymaterial.course_payment.delete');

    //user who bought the study courses
    Route::get('admin/user/study/course', 'AdminController\StudyMaterial\AdminStudyMaterialController@user_study_course')->name('admin.user.study.course');

    //study allot
    Route::get('admin/course/study/allot', 'AdminController\StudyMaterial\AdminStudyMaterialController@studyAllot')->name('admin.study.allot');

    //delete
    Route::delete('admin/user/study/delete/{id}', 'AdminController\StudyMaterial\AdminStudyMaterialController@userstudyDestroy')->name('admin.user.study.delete');

    // orders study
    Route::get('admin/study/orders/create', 'AdminController\StudyMaterial\AdminStudyMaterialOrderController@create')->name('admin.study.orders.create');
    Route::get('admin/study/orders/success', 'AdminController\StudyMaterial\AdminStudyMaterialOrderController@success')->name('admin.study.orders.success');
    Route::get('admin/study/orders/{id}/allow', 'AdminController\StudyMaterial\AdminStudyMaterialOrderController@allow')->name('admin.study.orders.allow');
    Route::delete('admin/study/order/{id}/destroy', 'AdminController\StudyMaterial\AdminStudyMaterialOrderController@destroy_order')->name('admin.study.orders.destroy');

    // admin user course detail excel
    Route::get('admin/usercoursedetails/study', 'AdminController\AdminUserCourseDetailController@studyindex')->name('admin.usercoursedetail.study.index');


    //admin answers
    Route::resource('admin/answers', 'AdminController\AdminAnswersController', ['names' => [
        'index' => 'admin.answers.index',
        'create' => 'admin.answers.create',
        'store' => 'admin.answers.store',
        'edit' => 'admin.answers.edit',
        'show' => 'admin.answers.show',
        'update' => 'admin.answers.update',
        'delete' => 'answers.destroy'
    ]]);

    Route::post('admin/answers/unique', 'AdminController\AdminAnswersController@unique')->name('admin.answers.unique');


    //admin result
    Route::resource('admin/showresult', 'AdminController\AdminShowResultController', ['names' => [
        'index' => 'admin.showresult.index',
        'create' => 'admin.showresult.create',
        'store' => 'admin.showresult.store',
        'edit' => 'admin.showresult.edit',
        'show' => 'admin.showresult.show',
        'update' => 'admin.showresult.update',
        'delete' => 'showresult.destroy'
    ]]);

    //admin task management
    Route::get('admin/task/complete', 'AdminController\TaskController\TaskCompleteController@index')->name('admin.task-complete.index');
    Route::get('admin/task/done/{id}', 'AdminController\TaskController\TaskCompleteController@complete')->name('admin.task.done');
    Route::post('admin/task/complete/filter', 'AdminController\TaskController\TaskCompleteController@filter')->name('admin.task-complete.filter');

    Route::get('admin/leave/index', 'AdminController\TaskController\LeaveController@index')->name('admin.leave.index');
    Route::post('admin/leave/action/{id}', 'AdminController\TaskController\LeaveController@approve')->name('admin.leave.action');
    Route::post('admin/leave/filter', 'AdminController\TaskController\LeaveController@filter')->name('admin.leave.filter');

    Route::get('admin/task/given', 'AdminController\TaskController\TaskGivenController@index')->name('admin.task-given.index');
    Route::get('admin/task/given/create', 'AdminController\TaskController\TaskGivenController@create')->name('admin.task-given.create');
    Route::post('admin/task/given/store', 'AdminController\TaskController\TaskGivenController@store')->name('admin.task-given.store');
    Route::get('admin/task/given/edit/{id}', 'AdminController\TaskController\TaskGivenController@edit')->name('admin.task-given.edit');
    Route::patch('admin/task/given/update/{id}', 'AdminController\TaskController\TaskGivenController@update')->name('admin.task-given.update');
    Route::post('admin/task/given/filter', 'AdminController\TaskController\TaskGivenController@filter')->name('admin.task-given.filter');
    Route::delete('admin/task/given/delete/{id}', 'AdminController\TaskController\TaskGivenController@destroy')->name('admin.task-given.delete');

    Route::get('admin/daily/task/index', 'AdminController\TaskController\DailyTaskController@index')->name('admin.daily-task.index');
    Route::get('admin/daily/task/approve/{id}', 'AdminController\TaskController\DailyTaskController@approve')->name('admin.daily-task.approve');
    Route::post('admin/daily/task/filter', 'AdminController\TaskController\DailyTaskController@filter')->name('admin.daily-task.filter');
    Route::get('admin/daily/counsellor/{id}', 'AdminController\TaskController\DailyTaskController@counsellor_list')->name('admin.daily.counsellor-list.index');

    //recorded courses
    Route::resource('admin/recorded', 'AdminController\Recorded\AdminRecordedController', ['names' => [
        'index' => 'admin.recorded.index',
        'create' => 'admin.recorded.create',
        'store' => 'admin.recorded.store',
        'edit' => 'admin.recorded.edit',
        'show' => 'admin.recorded.show',
        'update' => 'admin.recorded.update'
    ]]);
    // RECORDED course Bank requests
    Route::patch('admin/recorded/course_payment/allow/{id}', 'AdminController\Recorded\AdminRecordedPaymentController@allow')
        ->name('admin.recorded.course_payment.allow');

    Route::get('admin/recorded/course_payment/pending', 'AdminController\Recorded\AdminRecordedPaymentController@pending')
        ->name('admin.recorded.course_payment.pending');

    Route::get('admin/recorded/course_payment/processed', 'AdminController\Recorded\AdminRecordedPaymentController@processed')
        ->name('admin.recorded.course_payment.processed');

    // payment delete RECORDED
    Route::delete('admin/recorded/course_payment/delete/{id}', 'AdminController\Recorded\AdminRecordedPaymentController@destroy')
        ->name('admin.recorded.course_payment.delete');

    //user who bought the RECORDED courses
    Route::get('admin/user/recorded/course', 'AdminController\Recorded\AdminRecordedController@user_recorded_course')
        ->name('admin.user.recorded.course');

    //RECORDED allot
    Route::get('admin/course/recorded/allot', 'AdminController\Recorded\AdminRecordedController@recordedAllot')
        ->name('admin.recorded.allot');

    //delete RECORDED
    Route::delete('admin/user/recorded/delete/{id}', 'AdminController\Recorded\AdminRecordedController@userRecordedDestroy')
        ->name('admin.user.recorded.delete');

    // orders Razorpay RECORDED
    Route::get('admin/recorded/orders/create', 'AdminController\Recorded\AdminRecordedRazorController@create')
        ->name('admin.recorded.orders.create');
    Route::get('admin/recorded/orders/success', 'AdminController\Recorded\AdminRecordedRazorController@success')
        ->name('admin.recorded.orders.success');
    Route::get('admin/recorded/orders/{id}/allow', 'AdminController\Recorded\AdminRecordedRazorController@allow')
        ->name('admin.recorded.orders.allow');
    Route::delete('admin/recorded/order/{id}/destroy', 'AdminController\Recorded\AdminRecordedRazorController@destroy_order')
        ->name('admin.recorded.orders.destroy');
    Route::get('admin/usercoursedetails/recorded', 'AdminController\AdminUserCourseDetailController@recordedindex')->name('admin.usercoursedetail.recorded.index');

    //admin coupon create
    Route::get('admin/admin-coupon', 'AdminController\AdminCouponController@admin_coupon_create')->name('admin.admin-coupon.create');
    Route::post('admin/admin-coupon/store', 'AdminController\AdminCouponController@admin_coupon_store')->name('admin.admin-coupon.store');



    /**
     * Admin invoice create routes
     */
    //Upsc
    Route::get('admin/upsc/course-invoice/{id}/{course}', 'AdminController\AdminUserCourseDetailController@upsc_razor_invoice')->name('admin.upsc.razor-invoice');
    //Apsc
    Route::get('admin/apsc/course-invoice/{id}/{course}', 'AdminController\AdminUserCourseDetailController@apsc_razor_invoice')->name('admin.apsc.razor-invoice');
    //study
    Route::get('admin/study/course-invoice/{id}/{course}', 'AdminController\AdminUserCourseDetailController@study_razor_invoice')->name('admin.study.razor-invoice');
    //recorded
    Route::get('admin/recorded/course-invoice/{id}/{course}', 'AdminController\AdminUserCourseDetailController@recorded_razor_invoice')->name('admin.recorded.razor-invoice');

    Route::get('admin/new/video/unique', 'AdminController\AdminNewVideoController@unique')->name('admin.new_video.unique');
    Route::resource('admin/new/video', 'AdminController\AdminNewVideoController', ['names' => [
        'index' => 'admin.new_video.index',
        'create' => 'admin.new_video.create',
        'store' => 'admin.new_video.store',
        'edit' => 'admin.new_video.edit',
        'show' => 'admin.new_video.show',
        'update' => 'admin.new_video.update',
        'destroy' => 'new_video.destroy'
    ]]);


    Route::resource('admin/new/video/sub/topic', 'AdminController\AdminNewVideoSubTopicAdminController', ['names' => [
        'index' => 'admin.new_video_sub_topic.index',
        'store' => 'admin.new_video_sub_topic.store',
        'edit' => 'admin.new_video_sub_topic.edit',
        'update' => 'admin.new_video_sub_topic.update',
        'destroy' => 'new_video_sub_topic.destroy'
    ]]);

    // student information 
    Route::get('admin/studentAdmission/show/{id}', [\App\Http\Controllers\AdminController\AdminStudentAdmissionController::class, 'show'])->name('admin.student-admission.show');

    // Student addmission Invoice
    Route::get('admin/studentAdmission/invoice/{id}', [\App\Http\Controllers\AdminController\AdminStudentAdmissionController::class, 'invoice'])
        ->name('admin.studentAdmission.invoice');

    // admission enquiries
    Route::get('admin/admissionenquiries/{branch}', [\App\Http\Controllers\AdminController\AdminAdmissionEnqueryController::class, 'index'])
        ->name('admin.admissionenquiries.index');
    Route::get('admin/admissionenquiries/create/{branch}', [\App\Http\Controllers\AdminController\AdminAdmissionEnqueryController::class, 'create'])
        ->name('admin.admissionenquiries.create');
    Route::resource('admin/admissionenquiries', 'AdminController\AdminAdmissionEnqueryController', ['names' => [
        'store' => 'admin.admissionenquiries.store',
        'edit' => 'admin.admissionenquiries.edit',
        'show' => 'admin.admissionenquiries.show',
        'update' => 'admin.admissionenquiries.update',
        'destroy' => 'admissionenquiries.destroy'
    ]])->except(['index', 'create']);
    // Enter Course
    Route::resource('admin/entercourse', 'AdminController\AdminEnterCourseController', ['names' => [
        'index' => 'admin.entercourse.index',
        'create' => 'admin.entercourse.create',
        'store' => 'admin.entercourse.store',
        'edit' => 'admin.entercourse.edit',
        'update' => 'admin.entercourse.update',
        'destroy' => 'entercourse.destroy'
    ]]);



    // Student Admission pay
    Route::resource('admin/studentAdmissionPay', 'AdminController\AdminStudentAdmissionPayController', ['names' => [
        'index' => 'admin.studentAdmissionPay.index',
        'edit' => 'admin.studentAdmissionPay.edit',
        'store' => 'admin.studentAdmissionPay.store',
        'show' => 'admin.studentAdmissionPay.show',
        'update' => 'admin.studentAdmissionPay.update',
        'destroy' => 'studentAdmissionPay.destroy'
    ]]);
    Route::get(
        'admin/studentAdmissionPay/create/{id}',
        'AdminController\AdminStudentAdmissionPayController@create_pay'
    )
        ->name('admin.studentAdmissionPay.create');
    // Student Admission
    Route::get('admin/studentAdmission/{branch}', [\App\Http\Controllers\AdminController\AdminStudentAdmissionController::class, 'index'])
        ->name('admin.studentAdmission.index');
    Route::get('admin/studentAdmission/create/{branch}', [\App\Http\Controllers\AdminController\AdminStudentAdmissionController::class, 'create'])
        ->name('admin.studentAdmission.create');
    Route::get('admin/studentAdmission/monthsearch', [\App\Http\Controllers\AdminController\AdminStudentAdmissionController::class, 'monthSearch'])
        ->name('admin.studentAdmission.monthsearch');
    Route::get('admin/studentAdmission/datesearch', [\App\Http\Controllers\AdminController\AdminStudentAdmissionController::class, 'dateSearch'])
        ->name('admin.studentAdmission.datesearch');
    Route::resource('admin/studentAdmission', 'AdminController\AdminStudentAdmissionController', ['names' => [
        'store' => 'admin.studentAdmission.store',
        'edit' => 'admin.studentAdmission.edit',
        'show' => 'admin.studentAdmission.show',
        'update' => 'admin.studentAdmission.update',
        'destroy' => 'studentAdmission.destroy'
    ]])->except(['index', 'create']);

    // Staff Information
    Route::resource('admin/staffInformation', 'AdminController\AdminStaffInformationController', ['names' => [
        'index' => 'admin.staffInformation.index',
        'create' => 'admin.staffInformation.create',
        'store' => 'admin.staffInformation.store',
        'edit' => 'admin.staffInformation.edit',
        'show' => 'admin.staffInformation.show',
        'update' => 'admin.staffInformation.update',
        'destroy' => 'staffInformation.destroy'
    ]]);
    //new Tests
    Route::resource('admin/new/test', 'AdminController\AdminNewTestController', ['names' => [
        'index' => 'admin.new_test.index',
        'create' => 'admin.new_test.create',
        'store' => 'admin.new_test.store',
        'edit' => 'admin.new_test.edit',
        'show' => 'admin.new_test.show',
        'update' => 'admin.new_test.update',
        'destroy' => 'new_test.destroy'
    ]]);

    Route::post('admin/new/test/unique', 'AdminController\AdminNewTestController@unique')
        ->name('admin.new_test.unique');
    Route::resource('admin/new/test/sub/topic', 'AdminController\AdminNewTestSubTopicController', ['names' => [
        'index' => 'admin.new_test_sub_topic.index',
        'store' => 'admin.new_test_sub_topic.store',
        'edit' => 'admin.new_test_sub_topic.edit',
        'update' => 'admin.new_test_sub_topic.update',
        'destroy' => 'new_test_sub_topic.destroy'
    ]]);

    //Income details
    Route::get('admin/staff-income', [\App\Http\Controllers\AdminController\AdminStaffIncomeController::class, 'index'])
        ->name('admin.staff-income.index');
    Route::get('admin/staff-income/create-salary/{id}', [\App\Http\Controllers\AdminController\AdminStaffIncomeController::class, 'create_salary'])
        ->name('admin.staff-income.create-salary');
    Route::get('admin/staff-income/show-salary/{id}', [\App\Http\Controllers\AdminController\AdminStaffIncomeController::class, 'show_salary'])
        ->name('admin.staff-income.show-salary');
    Route::post('admin/staff-income/store-salary', [\App\Http\Controllers\AdminController\AdminStaffIncomeController::class, 'store_salary'])
        ->name('admin.staff-income.store-salary');
    Route::get('admin/staff-income/salary-index/{id}', [\App\Http\Controllers\AdminController\AdminStaffIncomeController::class, 'salary_index'])
        ->name('admin.staff-income.salary-index');
    Route::get('admin/staff-income/salary-show/{id}', [\App\Http\Controllers\AdminController\AdminStaffIncomeController::class, 'salary_show'])
        ->name('admin.staff-income.salary-show');
    Route::get('admin/staff-income/salary-edit/{id}', [\App\Http\Controllers\AdminController\AdminStaffIncomeController::class, 'salary_edit'])
        ->name('admin.staff-income.salary-edit');
    Route::patch('admin/staff-income/salary-update/{id}', [\App\Http\Controllers\AdminController\AdminStaffIncomeController::class, 'salary_update'])
        ->name('admin.staff-income.salary-update');
    Route::delete('admin/staff-income/salary-delete/{id}', [\App\Http\Controllers\AdminController\AdminStaffIncomeController::class, 'salary_delete'])
        ->name('admin.staff-income.salary-delete');
    Route::get('admin/staff-income/salary-pdf/{income}', [\App\Http\Controllers\AdminController\AdminStaffIncomeController::class, 'salaryPdf'])
        ->name('admin.staff-income.salary-pdf');

    //Staff Points
    Route::get('admin/staff-point', [\App\Http\Controllers\AdminController\AdminPointsController::class, 'index'])
        ->name('admin.staff-point.index');
    Route::get('admin/staff-point/create/{id}', [\App\Http\Controllers\AdminController\AdminPointsController::class, 'create'])
        ->name('admin.staff-point.create');
    Route::get('admin/staff-point/points/{id}', [\App\Http\Controllers\AdminController\AdminPointsController::class, 'monthlyPoints'])
        ->name('admin.staff-point.points');
    Route::post('admin/staff-point/store', [\App\Http\Controllers\AdminController\AdminPointsController::class, 'store'])
        ->name('admin.staff-point.store');
    Route::get('admin/staff-point/edit/{point}', [\App\Http\Controllers\AdminController\AdminPointsController::class, 'edit'])
        ->name('admin.staff-point.edit');
    Route::patch('admin/staff-point/update/{id}', [\App\Http\Controllers\AdminController\AdminPointsController::class, 'update'])
        ->name('admin.staff-point.update');
    Route::delete('admin/staff-point/delete/{id}', [\App\Http\Controllers\AdminController\AdminPointsController::class, 'delete'])
        ->name('admin.staff-point.delete');
    Route::get('admin/staff-point/show/{point}', [\App\Http\Controllers\AdminController\AdminPointsController::class, 'show'])
        ->name('admin.staff-point.show');
    Route::get('admin/monthsearch/', [\App\Http\Controllers\AdminController\AdminStudentAdmissionController::class, 'monthSearch'])
        ->name('admin.studentAdmission.monthsearch');
    Route::get('admin/datesearch/', [\App\Http\Controllers\AdminController\AdminStudentAdmissionController::class, 'dateSearch'])
        ->name('admin.studentAdmission.datesearch');

    // request coupon
    Route::get(
        'admin/request/coupon/index',
        [\App\Http\Controllers\AdminController\Request\AdminRequestCouponController::class, 'index']
    )
        ->name('admin.request.coupon.index');

    // Rating
    Route::get(
        'admin/video-rating/index',
        [\App\Http\Controllers\AdminController\AdminUsersController::class, 'videoRating']
    )
        ->name('admin.video-rating.index');
    Route::post(
        'admin/video-rating-search/index',
        [\App\Http\Controllers\AdminController\AdminUsersController::class, 'videoRatingSearch']
    )
        ->name('admin.video-rating-search.index');

    // video rating New
    Route::get(
        'admin/video-rating-new/index',
        [\App\Http\Controllers\AdminController\AdminUsersController::class, 'videoRatingNew']
    )
        ->name('admin.video-rating-new.index');
    Route::post(
        'admin/video-rating-new-search/index',
        [\App\Http\Controllers\AdminController\AdminUsersController::class, 'videoRatingNewSearch']
    )
        ->name('admin.video-rating-new-search.index');

    // articles
    Route::get(
        'admin/articles',
        [\App\Http\Controllers\AdminController\Article\ArticleController::class, 'index']
    )->name('admin.article.index');
    // notifications
    Route::resource('admin/notifications', 'AdminController\Notification\NotificationController', ['names' => [
        'index' => 'admin.notification.index',
        'store' => 'admin.notification.store',
        'create' => 'admin.notification.create',
        'edit' => 'admin.notification.edit',
        'update' => 'admin.notification.update',
        'destroy' => 'notification.destroy'
    ]]);

    // daily news
    Route::resource('admin/dailynews', 'AdminController\DailyNews\DailyNewsController', ['names' => [
        'index' => 'admin.dailynews.index',
        'store' => 'admin.dailynews.store',
        'create' => 'admin.dailynews.create',
        'edit' => 'admin.dailynews.edit',
        'update' => 'admin.dailynews.update',
        'destroy' => 'dailynews.destroy'
    ]]);
    // daily news analyse
    Route::resource('admin/dailynewsanalyse', 'AdminController\DailyNews\DailyNewsAnalyseController', ['names' => [
        'index' => 'admin.dailynewsanalyse.index',
        'store' => 'admin.dailynewsanalyse.store',
        'create' => 'admin.dailynewsanalyse.create',
        'edit' => 'admin.dailynewsanalyse.edit',
        'update' => 'admin.dailynewsanalyse.update',
        'destroy' => 'dailynewsanalyse.destroy'
    ]]);
    // assignments
    Route::resource('admin/assignments', 'AdminController\Assignment\AssignmentController', ['names' => [
        'index' => 'admin.assignments.index',
        'store' => 'admin.assignments.store',
        'create' => 'admin.assignments.create',
        'edit' => 'admin.assignments.edit',
        'update' => 'admin.assignments.update',
        'destroy' => 'assignments.destroy'
    ]]);
    Route::get(
        'admin/assignments/create/score/{id}&{course}',
        [\App\Http\Controllers\AdminController\Assignment\AssignmentController::class, 'createScore']
    )->name('admin.assignments.createScore');
    Route::patch(
        'admin/assignments/add/score/{id}',
        [\App\Http\Controllers\AdminController\Assignment\AssignmentController::class, 'addScore']
    )->name('admin.assignments.addScore');

    Route::get(
        'admin/assignments/create/result/{id}&{course}',
        [\App\Http\Controllers\AdminController\Assignment\AssignmentController::class, 'createResult']
    )->name('admin.assignments.createResult');
    Route::patch(
        'admin/assignments/add/result/{id}',
        [\App\Http\Controllers\AdminController\Assignment\AssignmentController::class, 'addResult']
    )->name('admin.assignments.addResult');

    Route::get(
        'admin/assignments/create/feedback/{id}&{course}',
        [\App\Http\Controllers\AdminController\Assignment\AssignmentController::class, 'createFeedback']
    )->name('admin.assignments.createFeedback');
    Route::patch(
        'admin/assignments/add/feedback/{id}',
        [\App\Http\Controllers\AdminController\Assignment\AssignmentController::class, 'addFeedback']
    )->name('admin.assignments.addFeedback');

    Route::get(
        'admin/assignments/submission/{course}',
        [\App\Http\Controllers\AdminController\Assignment\AssignmentController::class, 'studentSubmission']
    )->name('admin.assignments.submission');


    /**
     * Chat routes
     */
    Route::get(
        "admin/chat-teachers/index",
        'AdminController\AdminChatController@index'
    )
        ->name('admin.chat-teachers.index');
    Route::post(
        "admin/chat-teachers/create",
        'AdminController\AdminChatController@create'
    )
        ->name('admin.chat-teachers.create');
    Route::get(
        'admin/chat-teachers/status/{val}',
        'AdminController\AdminChatController@teacherStatusChange'
    )
        ->name('admin.chat-teachers.status');



    //calculator
    Route::get('admin/calculator', [\App\Http\Controllers\AdminController\Calculator\CalculatorController::class, 'index'])->name('admin.calculator');

    //Tracking iD Routes
    Route::get(
        'admin/tracking/index',
        [\App\Http\Controllers\AdminController\AdminTrackingController::class, 'index']
    )->name('admin.tracking.index');
    Route::post(
        'admin/tracking/store',
        [\App\Http\Controllers\AdminController\AdminTrackingController::class, 'store']
    )->name('admin.tracking.store');
    Route::delete(
        'admin/tracking/delete/{id}',
        [\App\Http\Controllers\AdminController\AdminTrackingController::class, 'delete']
    )->name('admin.tracking.delete');

    //student admission payment info
    Route::get(
        'admin/student-admission-payment/index',
        [\App\Http\Controllers\AdminController\AdminStudentAdmissionController::class, 'studentPaymentInfo']
    )->name('admin.student-admission-payment.index');

    Route::get(
        'admin/user-address-details/show/{id}',
        [\App\Http\Controllers\AdminController\AdminUserCourseDetailController::class, 'userAddressDetail']
    )->name('admin.user-address-detail.show');



    // apsc all material
    Route::resource('admin/apscall', 'AdminController\Apsc\ApscAllController', ['names' => [
        'index' => 'admin.apscall.index',
        'store' => 'admin.apscall.store',
        'create' => 'admin.apscall.create',
        'edit' => 'admin.apscall.edit',
        'update' => 'admin.apscall.update',
        'destroy' => 'apscall.destroy'
    ]]);


    // quiz 
    Route::resource('admin/quiz', 'AdminController\Quiz\QuizController', ['names' => [
        'index' => 'admin.quiz.index',
        'store' => 'admin.quiz.store',
        'create' => 'admin.quiz.create',
        'edit' => 'admin.quiz.edit',
        'update' => 'admin.quiz.update',
        'destroy' => 'quiz.destroy'
    ]]);
    //questions
    Route::resource('admin/question', 'AdminController\Quiz\QuestionController', ['names' => [
        'store' => 'admin.question.store',
        'edit' => 'admin.question.edit',
        'update' => 'admin.question.update',
        'destroy' => 'question.destroy'
    ]]);

    Route::get('/admin/quiz/question/{id}', [App\Http\Controllers\AdminController\Quiz\QuestionController::class, 'index'])
        ->name('admin.question.index');
    Route::get('/admin/question/quiz/{id}', [App\Http\Controllers\AdminController\Quiz\QuestionController::class, 'create'])
        ->name('admin.question.create');

    //
    Route::get('/admin/quiz/assign/{id}', [App\Http\Controllers\AdminController\Quiz\QuizController::class, 'viewAssign'])
        ->name('admin.quiz.assign');

    Route::resource(
        'admin/assignquiz',
        'AdminController\Quiz\AssignQuizController',
        ['names' => [
            'store' => 'admin.assignquiz.store',
            'destroy' => 'assignquiz.destroy'
        ]]
    );
    Route::get('admin/assignquiz/create/{id}', [App\Http\Controllers\AdminController\Quiz\AssignQuizController::class, 'create'])
        ->name('admin.assignquiz.create');

    Route::get('admin/quizQuiz', [App\Http\Controllers\AdminController\Quiz\QuizController::class, 'viewQuiz'])
        ->name('admin.viewQuiz');

    Route::get('admin/quizresult/{id}', [App\Http\Controllers\AdminController\Quiz\QuizController::class, 'viewResult'])
        ->name('admin.quizresult');

    Route::delete('admin/quizresult/{id}', [App\Http\Controllers\AdminController\Quiz\QuizController::class, 'quizResultDestroy'])
        ->name('quizresult.destroy');


    // export quiz result
    Route::get('/export/quiz-result', [ExportController::class, 'quizExport'])->name('export.quiz.result');


    // add user to installment
    Route::get(
        'admin/payment-installment-add/index',
        [App\Http\Controllers\AdminController\AdminPaymentInstallmentsController::class, 'userInstallmentIndex']
    )
        ->name('admin.payment-installment-add.index');
    Route::post(
        'admin/payment-installment-add/add-user',
        [App\Http\Controllers\AdminController\AdminPaymentInstallmentsController::class, 'addUserToInstallment']
    )
        ->name('admin.payment-installment-add.add-user');
    Route::delete(
        'admin/payment-installment-add/delete',
        [App\Http\Controllers\AdminController\AdminPaymentInstallmentsController::class, 'deleteUserFromInstallment']
    )
        ->name('admin.payment-installment-add.delete');

    // Payment Installments
    Route::get('admin/payment-installments/index', [App\Http\Controllers\AdminController\AdminPaymentInstallmentsController::class, 'index'])
        ->name('admin.payment-installments.index');
    Route::get('admin/payment-installments/show/{user_id}/{unique_course_id}/{course_id}', [App\Http\Controllers\AdminController\AdminPaymentInstallmentsController::class, 'show'])
        ->name('admin.payment-installments.show');
    Route::post('admin/payment-installments/add-amount', [App\Http\Controllers\AdminController\AdminPaymentInstallmentsController::class, 'addAmount'])
        ->name('admin.payment-installments.add-amount');
    Route::post('admin/payment-installments/store-installment', [App\Http\Controllers\AdminController\AdminPaymentInstallmentsController::class, 'storePayment'])
        ->name('admin.payment-installments.store-installment');
    Route::get('admin/payment-installments/allow/{id}', [App\Http\Controllers\AdminController\AdminPaymentInstallmentsController::class, 'allowCourse'])
        ->name('admin.payment-installments.allow');
    Route::get('admin/payment-installments/create-invoice/{id}', [App\Http\Controllers\AdminController\AdminPaymentInstallmentsController::class, 'createInvoice'])
        ->name('admin.payment-installments.create-invoice');


    // User rating admin routes
    Route::get(
        '/admin/user-rating/index',
        [App\Http\Controllers\AdminController\AdminUserRatingController::class, 'index']
    )->name('admin.user-rating.index');

    // Admin Poll routes
    Route::get(
        '/admin/poll/index',
        [App\Http\Controllers\AdminController\Poll\AdminPollController::class, 'index']
    )->name('admin.poll.index');

    Route::get(
        '/admin/poll/create',
        [App\Http\Controllers\AdminController\Poll\AdminPollController::class, 'create']
    )->name('admin.poll.create');

    Route::post(
        '/admin/poll/store',
        [App\Http\Controllers\AdminController\Poll\AdminPollController::class, 'store']
    )->name('admin.poll.store');

    Route::get(
        '/admin/poll/edit/{id}',
        [App\Http\Controllers\AdminController\Poll\AdminPollController::class, 'edit']
    )->name('admin.poll.edit');

    Route::patch(
        '/admin/poll/update/{id}',
        [App\Http\Controllers\AdminController\Poll\AdminPollController::class, 'update']
    )->name('admin.poll.update');

    Route::delete(
        '/admin/poll/delete/{id}',
        [App\Http\Controllers\AdminController\Poll\AdminPollController::class, 'destroy']
    )->name('admin.poll.delete');

    // Display User polls routes
    Route::get(
        '/admin/user-poll/index',
        [App\Http\Controllers\AdminController\Poll\AdminUserPollController::class, 'index']
    )->name('admin.user-poll.index');

    Route::get(
        '/admin/user-poll/show/{id}',
        [App\Http\Controllers\AdminController\Poll\AdminUserPollController::class, 'show']
    )->name('admin.user-poll.show');

    // admin eventdata
    Route::get('/admin/eventdata/index', [App\Http\Controllers\AdminController\EventData\EventDataController::class, 'index'])
        ->name('admin.eventdata.index');


    // admin user webinar data
    Route::get(
        '/admin/user-webinar/index',
        [\App\Http\Controllers\AdminController\AdminUserWebinarController::class, 'index']
    )
        ->name('admin.user-webinar.index');

    Route::get(
        '/admin/user-webinar/index-webinar',
        [\App\Http\Controllers\AdminController\AdminUserWebinarController::class, 'index_webinar']
    )
        ->name('admin.user-webinar.index_webinar');

    Route::get(
        '/admin/user-webinar/counsellor/create',
        [\App\Http\Controllers\AdminController\AdminUserWebinarController::class, 'create']
    )
        ->name('admin.user-webinar.counsellor.create');

    Route::post(
        '/admin/user-webinar/counsellor/store',
        [\App\Http\Controllers\AdminController\AdminUserWebinarController::class, 'store']
    )
        ->name('admin.user-webinar.counsellor.store');

    Route::post(
        '/admin/user-webinar/import',
        [\App\Http\Controllers\AdminController\AdminUserWebinarController::class, 'import']
    )
        ->name('admin.user-webinar.import');
    Route::get(
        '/admin/user-webinar/search',
        [\App\Http\Controllers\AdminController\AdminUserWebinarController::class, 'search_result']
    )
        ->name('admin.user-webinar.search');

    Route::get(
        '/admin/user-webinar/counsellor-students/{counsellorId}',
        [\App\Http\Controllers\AdminController\AdminUserWebinarController::class, 'show_counsellor_students']
    )
        ->name('admin.user-webinar.counsellor-students.show');
    Route::get(
        '/admin/user-webinar/student-search',
        [\App\Http\Controllers\AdminController\AdminUserWebinarController::class, 'search_student']
    )
        ->name('admin.user-webinar.student-search');

    Route::post(
        '/admin/user-webinar/students/show',
        [\App\Http\Controllers\AdminController\AdminUserWebinarController::class, 'show_students']
    )
        ->name('admin.user-webinar.students.show');

    Route::delete(
        '/admin/user-webinar/{id}',
        [\App\Http\Controllers\AdminController\AdminUserWebinarController::class, 'destroy']
    )
        ->name('admin.user-webinar.destroy');


    Route::get(
        '/admin/seminars/{type}',
        [\App\Http\Controllers\AdminController\AdminSeminarController::class, 'index']
    )->name('admin.seminars.index');



    Route::delete(
        '/admin/seminars/{type}',
        [\App\Http\Controllers\AdminController\AdminSeminarController::class, 'delete']
    )->name('admin.seminars.delete');

    //job routes
    Route::get(
        '/admin/jobs/index',
        [\App\Http\Controllers\AdminController\AdminJobController::class, 'index']
    )->name('admin.job.index');
    Route::delete(
        '/admin/jobs/destroy/{id}',
        [\App\Http\Controllers\AdminController\AdminJobController::class, 'destroy']
    )->name('admin.job.destroy');

    // Student analysis routes
    Route::get(
        '/admin/student-analysis/index',
        [\App\Http\Controllers\AdminController\AdminStudentAnalysisController::class, 'index']
    )->name('admin.student.analysis.index');
    Route::get(
        '/admin/student-analysis/show/{id}',
        [\App\Http\Controllers\AdminController\AdminStudentAnalysisController::class, 'show']
    )->name('admin.student.analysis.show');
    Route::get(
        '/admin/student-analysis/create',
        [\App\Http\Controllers\AdminController\AdminStudentAnalysisController::class, 'create']
    )->name('admin.student.analysis.create');
    Route::post(
        '/admin/student-analysis/store',
        [\App\Http\Controllers\AdminController\AdminStudentAnalysisController::class, 'store']
    )->name('admin.student.analysis.store');
    Route::delete(
        '/admin/student-analysis/delete/{id}',
        [\App\Http\Controllers\AdminController\AdminStudentAnalysisController::class, 'destroy']
    )->name('admin.student.analysis.delete');
    Route::delete(
        '/admin/student-analysis/delete',
        [\App\Http\Controllers\AdminController\AdminStudentAnalysisController::class, 'deleteAll']
    )->name('admin.student.analysis.deleteAll');
    Route::get('/export/student-analysis', [ExportController::class, 'studentAnalysis'])->name('export.studentAnalysis');


    //faculty poll
    Route::resource('admin/faculty/poll', 'AdminController\FacultyPoll\FacultyPollController', ['names' => [
        'index' => 'admin.faculty_poll.index',
        'store' => 'admin.faculty_poll.store',
        'create' => 'admin.faculty_poll.create',
        'edit' => 'admin.faculty_poll.edit',
        'update' => 'admin.faculty_poll.update',
        'destroy' => 'faculty_poll.destroy'
    ]]);
    //faculty poll questions
    Route::get(
        'admin/faculty/poll/questions/{id}',
        [\App\Http\Controllers\AdminController\FacultyPoll\FacultyPollQuestionController::class, 'index']
    )->name('admin.faculty_poll_question.index');
    Route::get(
        'admin/faculty/poll/questions/{id}/create',
        [\App\Http\Controllers\AdminController\FacultyPoll\FacultyPollQuestionController::class, 'create']
    )->name('admin.faculty_poll_question.create');
    Route::resource('admin/faculty/poll/questions', 'AdminController\FacultyPoll\FacultyPollQuestionController', ['names' => [
        'store' => 'admin.faculty_poll_question.store',
        'edit' => 'admin.faculty_poll_question.edit',
        'update' => 'admin.faculty_poll_question.update',
        'destroy' => 'faculty_poll_question.destroy'
    ]]);
    // result of faculty user poll
    Route::get(
        '/admin/faculty-user-poll/index',
        [App\Http\Controllers\AdminController\FacultyPoll\FacultyUserPollController::class, 'index']
    )->name('admin.faculty_user_poll.index');

    Route::get(
        '/admin/faculty-user-poll/show/{id}',
        [App\Http\Controllers\AdminController\FacultyPoll\FacultyUserPollController::class, 'show']
    )->name('admin.faculty_user_poll.show');


    // current affairs routes
    Route::get(
        '/admin/current-affairs/index',
        [\App\Http\Controllers\AdminController\AdminCurrentAffairController::class, 'index']
    )->name('admin.current.affairs.index');
    Route::get(
        '/admin/current-affairs/create',
        [\App\Http\Controllers\AdminController\AdminCurrentAffairController::class, 'create']
    )->name('admin.current.affairs.create');
    Route::post(
        '/admin/current-affairs/store',
        [\App\Http\Controllers\AdminController\AdminCurrentAffairController::class, 'store']
    )->name('admin.current.affairs.store');
    Route::get(
        '/admin/current-affairs/edit/{current_affair}',
        [\App\Http\Controllers\AdminController\AdminCurrentAffairController::class, 'edit']
    )->name('admin.current.affairs.edit');
    Route::patch(
        '/admin/current-affairs/update/{current_affair}',
        [\App\Http\Controllers\AdminController\AdminCurrentAffairController::class, 'update']
    )->name('admin.current.affairs.update');
    Route::delete(
        '/admin/current-affairs/destroy/{current_affair}',
        [\App\Http\Controllers\AdminController\AdminCurrentAffairController::class, 'destroy']
    )->name('admin.current.affairs.destroy');


    // test series quiz
    Route::resource('admin/testseriesquiz', 'AdminController\TestSeriesQuiz\TestSeriesQuizController', ['names' => [
        'index' => 'admin.testseriesquiz.index',
        'store' => 'admin.testseriesquiz.store',
        'create' => 'admin.testseriesquiz.create',
        'edit' => 'admin.testseriesquiz.edit',
        'update' => 'admin.testseriesquiz.update',
        'destroy' => 'testseriesquiz.destroy'
    ]]);
    //test series questions
    Route::get('/admin/testseriesquestion/{id}', [App\Http\Controllers\AdminController\TestSeriesQuiz\TestSeriesQuestionController::class, 'index'])
        ->name('admin.testseriesquestion.index');
    Route::get('/admin/testseriesquestion/quiz/{id}', [App\Http\Controllers\AdminController\TestSeriesQuiz\TestSeriesQuestionController::class, 'create'])
        ->name('admin.testseriesquestion.create');
    Route::get('/admin/testseriesquiz/assign/{id}', [App\Http\Controllers\AdminController\TestSeriesQuiz\TestSeriesQuizController::class, 'viewAssign'])
        ->name('admin.testseriesquiz.assign');
    Route::resource('admin/testseriesquestion', 'AdminController\TestSeriesQuiz\TestSeriesQuestionController', ['names' => [
        'store' => 'admin.testseriesquestion.store',
        'edit' => 'admin.testseriesquestion.edit',
        'update' => 'admin.testseriesquestion.update',
        'destroy' => 'testseriesquestion.destroy'
    ]]);

    Route::resource('admin/testseriesassignquiz', 'AdminController\TestSeriesQuiz\TestSeriesAssignController', ['names' => [
        'store' => 'admin.testseriesassignquiz.store',
        'destroy' => 'testseriesassignquiz.destroy'
    ]]);

    Route::get('admin/testseriesassignquiz/create/{id}', [App\Http\Controllers\AdminController\TestSeriesQuiz\TestSeriesAssignController::class, 'create'])
        ->name('admin.testseriesassignquiz.create');

    Route::get('admin/testseriesquizresult', [App\Http\Controllers\AdminController\TestSeriesQuiz\TestSeriesQuizController::class, 'viewResult'])
        ->name('admin.testseriesquizresult');

    Route::delete('admin/testseriesquizresult/{id}', [App\Http\Controllers\AdminController\TestSeriesQuiz\TestSeriesQuizController::class, 'quizResultDestroy'])
        ->name('testseriesquizresult.destroy');

    // export quiz result
    Route::get('/export/test-series-quiz-result', [ExportController::class, 'testSeriesQuizExport'])->name('export.testseriesquiz.result');

    // admin prelims faq
    Route::get('/admin/prelims-faq', [\App\Http\Controllers\AdminController\PrelimsFaq\PrelimsFaqController::class, 'index'])
        ->name('admin.prelims.faq.index');
    Route::post('/admin/prelims-faq', [\App\Http\Controllers\AdminController\PrelimsFaq\PrelimsFaqController::class, 'store'])
        ->name('admin.prelims.faq.store');
    Route::delete('/admin/prelims-faq/{id}', [\App\Http\Controllers\AdminController\PrelimsFaq\PrelimsFaqController::class, 'destroy'])
        ->name('admin.prelims.faq.destroy');

    // Online Quiz
    Route::resource('admin/onlineQuiz', 'AdminController\OnlineQuiz\OnlineQuizController', ['names' => [
        'index' => 'admin.onlineQuiz.index',
        'store' => 'admin.onlineQuiz.store',
        'create' => 'admin.onlineQuiz.create',
        'edit' => 'admin.onlineQuiz.edit',
        'update' => 'admin.onlineQuiz.update',
        'destroy' => 'onlineQuiz.destroy'
    ]]);
    //Online Quiz questions
    Route::get('/admin/onlineQuizquestion/{id}', [App\Http\Controllers\AdminController\OnlineQuiz\OnlineQuizQuestionController::class, 'index'])
        ->name('admin.onlineQuizquestion.index');
    Route::get('/admin/onlineQuizquestion/quiz/{id}', [App\Http\Controllers\AdminController\OnlineQuiz\OnlineQuizQuestionController::class, 'create'])
        ->name('admin.onlineQuizquestion.create');



    Route::resource('admin/onlineQuizquestion', 'AdminController\OnlineQuiz\OnlineQuizQuestionController', ['names' => [
        'store' => 'admin.onlineQuizquestion.store',
        'edit' => 'admin.onlineQuizquestion.edit',
        'update' => 'admin.onlineQuizquestion.update',
        'destroy' => 'onlineQuizquestion.destroy'
    ]]);


    Route::resource('admin/onlineQuizassign', 'AdminController\OnlineQuiz\OnlineQuizAssignController', ['names' => [
        'store' => 'admin.onlineQuizassign.store',
        'destroy' => 'onlineQuizassign.destroy'
    ]]);
    Route::get('/admin/onlineQuizquiz/assign/{id}', [App\Http\Controllers\AdminController\OnlineQuiz\OnlineQuizController::class, 'viewAssign'])
        ->name('admin.onlineQuiz.assign');

    Route::get('admin/onlineQuizassign/create/{id}', [App\Http\Controllers\AdminController\OnlineQuiz\OnlineQuizAssignController::class, 'create'])
        ->name('admin.onlineQuizassign.create');

    Route::get('admin/onlineQuizview', [App\Http\Controllers\AdminController\OnlineQuiz\OnlineQuizController::class, 'viewQuiz'])
        ->name('admin.onlineQuizView');

    Route::get('admin/onlineQuizresult/{id}', [App\Http\Controllers\AdminController\OnlineQuiz\OnlineQuizController::class, 'viewResult'])
        ->name('admin.onlineQuizresult');

    Route::delete('admin/onlineQuizresult/{id}', [App\Http\Controllers\AdminController\OnlineQuiz\OnlineQuizController::class, 'quizResultDestroy'])
        ->name('onlineQuizresult.destroy');
    Route::get('/apsc_exam', [\App\Http\Controllers\AdminController\AdminApscExamController::class, 'index'])->name('admin.apsc.exam.index');
    Route::delete('/apsc_exam/{id}', [\App\Http\Controllers\AdminController\AdminApscExamController::class, 'destroy'])->name('apsc.exam.destroy');
    Route::get(
        '/admin/offline-exam-registration',
        [\App\Http\Controllers\AdminController\AdminOfflineExamRegistartionController::class, 'index']
    )->name('admin.offline.exam.register.index');
    Route::delete(
        '/admin/offline-exam-registration',
        [\App\Http\Controllers\AdminController\AdminOfflineExamRegistartionController::class, 'deleteAll']
    )->name('admin.offline.exam.register.deleteAll');
    // Product Code
    Route::resource('admin/products', 'AdminController\Product\ProductController', ['names' => [
        'index' => 'admin.products.index',
        'store' => 'admin.products.store',
        'create' => 'admin.products.create',
        'edit' => 'admin.products.edit',
        'update' => 'admin.products.update',
        'destroy' => 'products.destroy'
    ]]);
    Route::get('/admin/products-print/{product}', [\App\Http\Controllers\AdminController\Product\ProductController::class, 'print'])
        ->name('products.print');
    // Product Orders
    Route::resource('admin/products-orders', 'AdminController\Product\ProductOrderController', ['names' => [
        'index' => 'admin.products.orders.index',
        'store' => 'admin.products.orders.store',
        'create' => 'admin.products.orders.create',
        'edit' => 'admin.products.orders.edit',
        'update' => 'admin.products.orders.update',
        'destroy' => 'products.orders.destroy'
    ]]);
    Route::resource('admin/free-master-class', 'AdminController\FreeMasterClassController', ['names' => [
        'index' => 'admin.free.master.class.index',
        'destroy' => 'free.master.class.destroy'
    ]]);
    // test series quiz roll
    Route::resource('admin/testseriesquizroll', 'AdminController\TestSeriesQuizRoll\TestSeriesQuizRollController', ['names' => [
        'index' => 'admin.testseriesquizroll.index',
        'store' => 'admin.testseriesquizroll.store',
        'create' => 'admin.testseriesquizroll.create',
        'edit' => 'admin.testseriesquizroll.edit',
        'update' => 'admin.testseriesquizroll.update',
        'destroy' => 'testseriesquizroll.destroy'
    ]]);
    //test series questions
    Route::get('/admin/testseriesquestionroll/{id}', [App\Http\Controllers\AdminController\TestSeriesQuizRoll\TestSeriesQuestionRollController::class, 'index'])
        ->name('admin.testseriesquestionroll.index');
    Route::get('/admin/testseriesquestionroll/quiz/{id}', [App\Http\Controllers\AdminController\TestSeriesQuizRoll\TestSeriesQuestionRollController::class, 'create'])
        ->name('admin.testseriesquestionroll.create');

    Route::resource('admin/testseriesquestionroll', 'AdminController\TestSeriesQuizRoll\TestSeriesQuestionRollController', ['names' => [
        'store' => 'admin.testseriesquestionroll.store',
        'edit' => 'admin.testseriesquestionroll.edit',
        'update' => 'admin.testseriesquestionroll.update',
        'destroy' => 'testseriesquestionroll.destroy'
    ]]);

    Route::get('admin/testseriesquizresultroll', [App\Http\Controllers\AdminController\TestSeriesQuizRoll\TestSeriesQuizRollController::class, 'viewResult'])
        ->name('admin.testseriesquizresultroll');

    Route::delete('admin/testseriesquizresultroll/{id}', [App\Http\Controllers\AdminController\TestSeriesQuizRoll\TestSeriesQuizRollController::class, 'quizResultDestroy'])
        ->name('testseriesquizresultroll.destroy');
    //Personal Mentor
    Route::resource('admin/personalmentor', 'AdminController\PersonalMentorController', ['names' => [
        'index' => 'admin.personalmentor.index',
        'store' => 'admin.personalmentor.store',
        'edit' => 'admin.personalmentor.edit',
        'update' => 'admin.personalmentor.update',
        'destroy' => 'personalmentor.destroy'
    ]]);
    // [App\Http\Controllers\AdminController\TestSeriesQuizRoll\TestSeriesQuizRollController::class, 'quizResultDestroy']
    Route::get('admin/personalmentor/set_time/{id}', [App\Http\Controllers\AdminController\PersonalMentorController::class, 'set_time'])
        ->name('admin.personalmentor.set_time');
    Route::get('admin/personalmentor/time/table', [App\Http\Controllers\AdminController\PersonalMentorController::class, 'timetable'])
        ->name('admin.personalmentor.timetable');

    // free trial course 
    Route::resource('admin/free-trial-course', 'AdminController\FreeTrialCourseController', ['names' => [
        'index' => 'admin.free.trial.course.index',
        'destroy' => 'free.trial.course.destroy'
    ]]);

    // Referal Code Routes
    Route::resource('admin/referralcode', 'AdminController\AdminReferralCodeController', ['names' => [
        'index' => 'admin.referralcode.index',
        'create' => 'admin.referralcode.create',
        'store' => 'admin.referralcode.store',
        'edit' => 'admin.referralcode.edit',
        'update' => 'admin.referralcode.update',
        'destroy' => 'referralcode.destroy'
    ]]);

    // Group Email routes
    Route::resource('admin/group-email', 'AdminController\GroupEmailController', ['names' => [
        'index' => 'admin.group.email.index',
        'create' => 'admin.group.email.create',
        'store' => 'admin.group.email.store',
        'destroy' => 'admin.group.email.destroy',
    ]]);

    // Interview Preparation
    Route::resource('admin/interview/preparations', 'AdminController\AdminInterviewPreparationController', ['names' => [
        'index' => 'admin.interview.preparation.index',
        'destroy' => 'interview.preparation.destroy'
    ]]);

    //  scholarships and mentoring
    Route::get(
        '/admin/scholarships-mentoring/{type}',
        [\App\Http\Controllers\AdminController\AdminAcsScholarshipMentoringController::class, 'index']
    )->name('admin.scholarships.mentoring.index');
    Route::delete(
        '/admin/scholarships-mentoring/{type}',
        [\App\Http\Controllers\AdminController\AdminAcsScholarshipMentoringController::class, 'delete']
    )->name('admin.scholarships.mentoring.delete');



    // HDFC order
    Route::get('/hdfc/order/index/{course_type}', [AdminHDFCOrdersController::class, 'index'])
        ->name('admin.hdfc-orders.index');
    Route::get('/hdfc/order/allow-course/{order_id}', [AdminHDFCOrdersController::class, 'allow_course'])
        ->name('admin.hdfc-orders.allow-course');

    Route::get('/admin/outside/course', [OutsideCourseController::class, 'index'])
        ->name('admin.outside.course.index');


    Route::post('/admin/outside/course/add_feedback', [OutsideCourseController::class, 'addFeedback'])
        ->name('admin.outside.course.add_feedback');
});




// admin middleware  end

Route::get('user/coupon/verify', 'UserCoupon@verify')->name('user.coupon.verify');

Route::get('user/course/buy/{id}', 'CourseController@buy')->name('user.course.buy');


//event book
Route::get('user/event/bookEvent/{id}', 'EventController@bookEvent')->name('user.event.bookEvent')->middleware('auth');

// user course
Route::get('course/index', 'CourseController@index')->name('course.index');
Route::resource('course', 'CourseController', ['names' => [
    'create' => 'course.create',
    'store' => 'course.store',
    'edit' => 'course.edit',
    'show' => 'course.show',
    'update' => 'course.update'
]])->middleware('auth');

// payment for user
Route::resource('payment', 'PaymentController', ['names' => [
    'index' => 'payment.index',
    'create' => 'payment.create',
    'store' => 'payment.store',
    'edit' => 'payment.edit',
    'show' => 'payment.show',
    'update' => 'payment.update'
]])->middleware('auth');

// user orders
Route::resource('order', 'OrderController', ['names' => [
    'index' => 'order.index',
    'create' => 'order.create',
    'store' => 'order.store',
    'edit' => 'order.edit',
    'show' => 'order.show',
    'update' => 'order.update'
]]);
Route::delete('user/upsc/razor/delete/{id}', 'OrderController@upsc_courses_order_destroy')
    ->name('upsc.order.delete')->middleware('auth');

//generate invoice
Route::get('user/order/invoice/apsc/{id}', 'InvoiceController@apsc')->name('user.order.apsc.invoice');
Route::get('user/order/invoice/upsc/{id}', 'InvoiceController@upsc')->name('user.order.upsc.invoice');
Route::get('user/order/invoice/show/{id}', 'InvoiceController@show')->name('user.order.invoice.show');

Route::get('/order/pending/payment/{order_id}', 'CoursePaymentController@pendingComplete')->name('order.pending.payment');


Route::get('user/coupon/verify', 'UserCoupon@verify')->name('user.coupon.verify');

// ias classes videos
Route::get('user/class/video/{course}', 'ClassVideoController@index')->name('user.class.video.index')->middleware('auth');
Route::get('user/class/video/play/{id}', 'ClassVideoController@play')->name('user.class.video.play')->middleware('auth');
Route::get('user/class/video/{course}/{type}', 'ClassVideoController@subVideos')->name('user.class.sub.videos')->middleware('auth');


/**
 * Chat Routes
 */
Route::get(
    'user/chat/index',
    'ChatController@index'
)
    ->name("user.chat.index")
    ->middleware('auth');
Route::get(
    'user/chat/teacher-index',
    'ChatController@teacherIndex'
)
    ->name("user.chat.teacher-index")
    ->middleware('auth');
Route::get(
    'user/chat/chat-panel/{id}',
    'ChatController@chatPanel'
)
    ->name("user.chat.chatPanel")
    ->middleware('auth');
Route::get(
    'user/chat/chat-notify/{id}',
    'ChatController@notifyTeacher'
)
    ->name('user.chat.chat-notify')
    ->middleware('auth');

/**
 * Chat Routes End
 */

// route for QR payment page
Route::get('payment/course/{slug}', 'PaymentController@pay')->name('payment.course')->middleware('auth');

// payment using razorpay
Route::get('course/payment/{course}', 'CoursePaymentController@initiate')->name('course.payment')->middleware('auth');
Route::post('course/payment/complete', 'CoursePaymentController@complete')->name('course.payment.complete')->middleware('auth');

/**
 * User Extra Material Routes
 */
Route::post(
    'user/extra-material/add-remove',
    [\App\Http\Controllers\AdminController\AdminUserExtraMaterialController::class, 'add_remove_material']
)
    ->name('user.extra_material.add_remove_material');

// payment for apsc course
Route::get('apsc/course/payment/{course}', 'Apsc\ApscCourseController@initiate')->name('apsc.course.payment')->middleware('auth');
Route::post('apsc/course/payment/complete', 'Apsc\ApscCourseController@complete')->name('apsc.payment.complete')->middleware('auth');
Route::get('apsc/course/payment/show/{id}', 'OrderController@apsc_order_show')->name('apsc.order.show')->middleware('auth');;
Route::get('apsc/course/payment/pending/{order_id}', 'Apsc\ApscCourseController@pendingComplete')->name('apsc.order.pending.payment')->middleware('auth');
Route::delete('apsc/razor/delete/{id}', 'OrderController@apsc_courses_order_destroy')
    ->name('apsc.order.delete')->middleware('auth');

// apsc bank payment
Route::get('apsc/course/bank/payment/{id}', 'Apsc\ApscCourseController@bank')->name('apsc.bank.payment.course')->middleware('auth');;
Route::post('apsc/course/bank/payment/store', 'Apsc\ApscCourseController@bank_store')->name('apsc.bank.payment.store')->middleware('auth');

//feedback
Route::post('user/feedback', 'FeedbackController@store')->name('user.feedback.store');

//wisdom page embedded
Route::get('wisdom', function () {
    return view('wisdom.index');
})->name('wisdom.index');

//advance

Route::get('/advancematerial', function () {
    return view('user.iasadvance.material');
})->name('user.ias.advance.material');

Route::get('/advancepaper', function () {
    return view('user.iasadvance.paper');
})->name('user.ias.advance.paper');

Route::get('/advancetest/{course}', function ($course) {
    return view('user.iasadvance.testmaterial', compact('course'));
})->name('user.ias.advance.test');

Route::get('/advanceplan', function () {
    return view('user.iasadvance.plan');
})->name('user.ias.advance.plan');

Route::get('/advancerecorded', function () {
    return view('user.iasadvance.recorded');
})->name('user.ias.advance.recorded');

Route::get('/advanceclassppt', function () {
    return view('user.iasadvance.classppt');
})->name('user.ias.advance.classppt');


//foundation

Route::get('/foundmaterial', function () {
    return view('user.iasfound.material');
})->name('user.ias.found.material');

Route::get('/foundpaper', function () {
    return view('user.iasfound.paper');
})->name('user.ias.found.paper');

Route::get('/foundtest/{course}', function ($course) {
    return view('user.iasfound.testmaterial', compact('course'));
})->name('user.ias.found.test');

Route::get('/foundplan', function () {
    return view('user.iasfound.plan');
})->name('user.ias.found.plan');

Route::get('/foundrecorded', function () {
    return view('user.iasfound.recorded');
})->name('user.ias.found.recorded');

//apsclive currentaffairs

Route::get('/apscliveclassppt', function () {
    return view('user.apsclive.classppt');
})->name('user.apsclive.classppt');

Route::get('/apsclivematerial', function () {
    return view('user.apsclive.material');
})->name('user.apsc.material');

Route::get('/apsclivepaper', function () {
    return view('user.apsclive.paper');
})->name('user.apsc.paper');

Route::get('/apsclivetest/{course}', function ($course) {
    return view('user.apsclive.testmaterial', compact('course'));
})->name('user.apsc.test');

Route::get('/apscliveplan', function () {
    return view('user.apsclive.plan');
})->name('user.apsc.plan');

Route::get('/apsclivecurrentaffairs', function () {
    return view('user.apsclive.currentaffairs');
})->name('user.apsc.currentaffairs');

Route::get('/apscliverecorded', function () {
    return view('user.apsclive.recorded');
})->name('user.apsc.recorded');

Route::get('/apsc/courses', 'Apsc\ApscCourseController@index')->name('apsc.courses.index');
Route::get('/apsc/course/{id}', 'Apsc\ApscCourseController@show')->name('apsc.course.show')->middleware('auth');

Route::get('user/apsc/payment/invoice/{id}', 'InvoiceController@apsc_payment')->name('user.apsc.payment.invoice');
Route::get('user/upsc/payment/invoice/{id}', 'InvoiceController@upsc_payment')->name('user.upsc.payment.invoice');


Route::get('/iasadvanced/courses', 'CourseController@iasadvancedindex')->name('ias.advanced.courses.index');


//ADVANCE MRNG

Route::get('/mrngmaterial', function () {
    return view('user.iasadvancemrng.material');
})->name('user.ias.advance.mrng.material');

Route::get('/mrngpaper', function () {
    return view('user.iasadvancemrng.paper');
})->name('user.ias.advance.mrng.paper');


Route::get('/mrngtest/{course}', function ($course) {
    return view('user.iasadvancemrng.testmaterial', compact('course'));
})->name('user.ias.advance.mrng.testmaterial');

Route::get('/mrngplan', function () {
    return view('user.iasadvancemrng.plan');
})->name('user.ias.advance.mrng.plan');

Route::get('/mrngclassppt', function () {
    return view('user.iasadvancemrng.classppt');
})->name('user.ias.advance.mrng.classppt');


//apscmrng

Route::get('/apscmrngclassppt', function () {
    return view('user.apscmrng.classppt');
})->name('user.apsc.mrng.classppt');

Route::get('/apscmrngmaterial', function () {
    return view('user.apscmrng.material');
})->name('user.apsc.mrng.material');

Route::get('/apscmrngpaper', function () {
    return view('user.apscmrng.paper');
})->name('user.apsc.mrng.paper');

Route::get('/apscmrngtest/{course}', function ($course) {
    return view('user.apscmrng.testmaterial', compact('course'));
})->name('user.apsc.mrng.test');

Route::get('/apscmrngplan', function () {
    return view('user.apscmrng.plan');
})->name('user.apsc.mrng.plan');

Route::get('/apscmrngrecorded', function () {
    return view('user.apscmrng.recorded');
})->name('user.apsc.mrng.recorded');

Route::get('/apsc/courses', 'Apsc\ApscCourseController@index')->name('apsc.courses.index');
Route::get('/apsc/course/{id}', 'Apsc\ApscCourseController@show')->name('apsc.course.show')->middleware('auth');

Route::get('/iasadvanced/courses', 'CourseController@iasadvancedindex')->name('ias.advanced.courses.index');

// bank transfer invoice
Route::get('user/apsc/payment/invoice/{id}', 'InvoiceController@apsc_payment')->name('user.apsc.payment.invoice');
Route::get('user/upsc/payment/invoice/{id}', 'InvoiceController@upsc_payment')->name('user.upsc.payment.invoice');


Route::get('user/test/{course}', 'TestController@tests')->name('user.tests.index');
Route::get('user/result/{course}', 'TestController@result')->name('user.result.index');


// Study material routes
Route::get('user/study/show/{id}', 'Study_material\StudyController@show')->name('user.study.show');
Route::get('user/study/payment/{course}', 'Study_material\StudyController@initiate')->name('user.study.payment')->middleware('auth');
Route::post('user/study/payment/complete', 'Study_material\StudyController@complete')->name('user.study.complete')->middleware('auth');
Route::get('user/study/payment/show/{id}', 'Study_material\StudyController@study_order_show')->name('user.study.order.show')->middleware('auth');
Route::get('user/study/razor/show/{id}', 'OrderController@study_show')->name('study.material.show')->middleware('auth');
Route::get('user/study/razor/pending/{order_id}', 'Study_material\StudyController@pendingComplete')->name('user.study.pending.payment')->middleware('auth');
Route::delete('user/study/razor/delete/{id}', 'OrderController@study_material_order_destroy')
    ->name('user.study.material.order.delete')->middleware('auth');

// study material bank routes
Route::get('user/study/bank/{course}', 'Study_material\StudyController@bank')->name('user.study.bank')->middleware('auth');
Route::post('user/study/bank/store', 'Study_material\StudyController@bank_store')->name('user.study.bank.store')->middleware('auth');

// study material invoice
Route::get('user/study/razor/invoice/{id}', 'InvoiceController@study_razor')->name('user.study.razor.invoice');
Route::get('user/study/bank/invoice/{id}', 'InvoiceController@study_bank')->name('user.study.bank.invoice');




Route::get('user/test/{course}', 'TestController@tests')->name('user.tests.index');
Route::get('user/result/{course}', 'TestController@result')->name('user.result.index');

//exam
Route::get('/resultsias', function () {
    $results = \App\ShowResult::orderby('rank', 'ASC')->get();
    $test_name = $results->pluck('test_name')->first();
    $test_date = $results->pluck('date')->first();
    $test_course = $results->pluck('course')->first();
    return view('exam.result', compact('results', 'test_name', 'test_date', 'test_course'));
})->name('exam.result');


//STUDYPLAN currentaffairs

Route::get('/apscstudymaterial', function () {
    return view('user.studymaterial.apscstudy.material');
})->name('user.study.material.apsc.study.material');

Route::get('/apscstudycurrentaffairs', function () {
    return view('user.studymaterial.apscstudy.currentaffairs');
})->name('user.study.material.apsc.study.currentaffairs');

Route::get('/apscstudypaper', function () {
    return view('user.studymaterial.apscstudy.paper');
})->name('user.study.material.apsc.study.paper');

Route::get('/apscstudyplan', function () {
    return view('user.studymaterial.apscstudy.plan');
})->name('user.study.material.apsc.study.plan');

Route::get('/apscstudy/{course}', function ($course) {
    return view('user.studymaterial.apscstudy.testmaterial', compact('course'));
})->name('user.study.material.apsc.testmaterial');

//apscrecorded currentaffairs

Route::get('/apscrecordedmaterial', function () {
    return view('user.apscrecorded.material');
})->name('user.apsc.recorded.material');

Route::get('/apscrecordedpaper', function () {
    return view('user.apscrecorded.paper');
})->name('user.apsc.recorded.paper');

Route::get('/apscrecordedcurrentaffairs', function () {
    return view('user.apscrecorded.currentaffairs');
})->name('user.apsc.recorded.currentaffairs');


Route::get('/apscrecordedtest/{course}', function ($course) {
    return view('user.apscrecorded.testmaterial', compact('course'));
})->name('user.apsc.recorded.test');

Route::get('/apscrecordedplan', function () {
    return view('user.apscrecorded.plan');
})->name('user.apsc.recorded.plan');

Route::get('/apscrecordedrecorded', function () {
    return view('user.apscrecorded.recorded');
})->name('user.apsc.recorded.recorded');


Route::get('/apscrecordedclassppt', function () {
    return view('user.apscrecorded.classppt');
})->name('user.apsc.recorded.classppt');


// user answer
Route::get('user/test/answer/apsc-live', 'AnswerController@apscLive')->name('user.answer.apsc-live');
Route::get('user/test/answer/apsc-morning', 'AnswerController@apscMorning')->name('user.answer.apsc-morning');
Route::get('user/test/answer/ias-advance', 'AnswerController@iasAdvance')->name('user.answer.ias-advance');
Route::get('user/test/answer/ias-advance-morning', 'AnswerController@iasAdvanceMorning')->name('user.answer.ias-advance-morning');
Route::get('user/test/answer/ias-foundation', 'AnswerController@iasFoundation')->name('user.answer.ias-foundation');


//user task
Route::get('user/task/complete', 'TaskController\TaskCompleteController@index')->name('user.task-complete.index');
Route::post('user/task/complete/store', 'TaskController\TaskCompleteController@store')->name('user.task-complete.store');
Route::delete('user/task/complete/delete/{id}', 'TaskController\TaskCompleteController@destroy')->name('user.task-complete.delete');

Route::get('user/leave/index', 'TaskController\LeaveController@index')->name('user.leave.index');
Route::post('user/leave/store', 'TaskController\LeaveController@store')->name('user.leave.store');
Route::delete('user/leave/delete/{id}', 'TaskController\LeaveController@destroy')->name('user.leave.delete');

Route::get('user/task/given/index', 'TaskController\TaskGivenController@index')->name('user.task-given.index');

Route::get('user/daily/task/index', 'TaskController\DailyTaskController@index')->name('user.daily-task.index');
Route::post('user/daily/task/store', 'TaskController\DailyTaskController@store')->name('user.daily-task.store');
Route::delete('user/daily/task/delete/{id}', 'TaskController\DailyTaskController@destroy')->name('user.daily-task.delete');
Route::get('user/daily/task/counsellor/{id}', 'TaskController\Counsellor@index')->name('user.daily.counsellor.index');
Route::post('user/daily/task/counsellor/store', 'TaskController\Counsellor@store')->name('user.daily.counsellor.store');
Route::delete('user/daily/counsellor/destroy/{id}', 'TaskController\Counsellor@destroy')->name('admin.daily-counsellor.destroy');

//iasrecorded

Route::get('/iasrecordedmaterial', function () {
    return view('user.iasrecorded.material');
})->name('user.ias.recorded.material');

Route::get('/iasrecordedpaper', function () {
    return view('user.iasrecorded.paper');
})->name('user.ias.recorded.paper');

Route::get('/iasrecordedtest/{course}', function ($course) {
    return view('user.iasrecorded.testmaterial', compact('course'));
})->name('user.ias.recorded.test');

Route::get('/iasrecordedplan', function () {
    return view('user.iasrecorded.plan');
})->name('user.ias.recorded.planias');

Route::get('/iasrecordedrecorded', function () {
    return view('user.iasrecorded.recorded');
})->name('user.ias.recorded.recorded');

//apscnewrecorded currentaffairs

Route::get('/apscnewrecordedmaterial', function () {
    return view('user.apscnewrecorded.material');
})->name('user.apsc.new.recorded.material');

Route::get('/apscnewrecordedpaper', function () {
    return view('user.apscnewrecorded.paper');
})->name('user.apsc.new.recorded.paper');

Route::get('/apscnewrecordedcurrentaffairs', function () {
    return view('user.apscnewrecorded.currentaffairs');
})->name('user.apsc.new.recorded.currentaffairs');

Route::get('/apscnewrecordedtest/{course}', function ($course) {
    return view('user.apscnewrecorded.testmaterial', compact('course'));
})->name('user.apsc.new.recorded.test');

Route::get('/apscnewrecordedplan', function () {
    return view('user.apscnewrecorded.plan');
})->name('user.apsc.new.recorded.planias');
//recorded courses
Route::get('/recorded/courses', 'RecordedController@recordedindex')->name('recorded.courses.index');
Route::get('/recorded/course/{slug}', 'RecordedController@show')->name('recorded.show')->middleware('auth');
// recorded course payment bank
Route::get('payment/recordedcourse/{slug}', 'RecordedController@pay')->name('payment.recorded')->middleware('auth');
Route::post('payment/recorded/store}', 'RecordedController@store')
    ->name('recorded.store')->middleware('auth');
// payment using razorpay
Route::get('recorded/payment/{course}', 'RecordedController@initiate')
    ->name('recorded.payment')->middleware('auth');
Route::post('recorded/payment/complete', 'RecordedController@complete')
    ->name('recorded.payment.complete')->middleware('auth');
Route::get('user/recorded/razor/show/{id}', 'OrderController@recorded_show')
    ->name('recorded.order.show')->middleware('auth');
Route::get('user/recorded/razor/pending/{order_id}', 'RecordedController@pendingComplete')
    ->name('user.recorded.pending.payment')->middleware('auth');
Route::delete('user/recorded/razor/delete/{id}', 'OrderController@recorded_courses_order_destroy')
    ->name('recorded.order.delete')->middleware('auth');

//iasstudymaterial


Route::get('/iasstudymaterialmaterial', function () {
    return view('user.iasstudymaterial.material');
})->name('user.ias.study.material.material');

Route::get('/iasstudymaterialpaper', function () {
    return view('user.iasstudymaterial.paper');
})->name('user.ias.study.material.paper');

Route::get('/iasstudymaterialplan', function () {
    return view('user.iasstudymaterial.plan');
})->name('user.ias.study.material.plan');
Route::get('/iasstudymaterial/{course}', function ($course) {
    return view('user.iasstudymaterial.testmaterial', compact('course'));
})->name('user.ias.study.material.test');
//ADVANCE 2022
Route::get('/iasadvancedbatch2022classppt', function () {
    return view('user.iasadvancedbatch2022.classppt');
})->name('user.iasadvancedbatch2022.classppt');

Route::get('/advancedbatch2022material', function () {
    return view('user.iasadvancedbatch2022.material');
})->name('user.ias.advance.batch.2022.material');

Route::get('/advancedbatch2022paper', function () {
    return view('user.iasadvancedbatch2022.paper');
})->name('user.ias.advance.batch.2022.paper');

Route::get('/advancedbatch2022test/{course}', function ($course) {
    return view('user.iasadvancedbatch2022.testmaterial', compact('course'));
})->name('user.ias.advance.batch.2022.testmaterial');

Route::get('/advancedbatch2022plan', function () {
    return view('user.iasadvancedbatch2022.plan');
})->name('user.ias.advance.batch.2022.plan');

Route::get('/advancedbatch2022recorded', function () {
    return view('user.iasadvancedbatch2022.recorded');
})->name('user.ias.advance.batch.2022.recorded');

Route::get('user/test/answer/{course}', 'AnswerController@resultIndex')
    ->name('user.answer.resultIndex');
//APSC 2022 currentaffairs

Route::get('/apscadvancedbatch2022classppt', function () {
    return view('user.apscadvancedbatch2022.classppt');
})->name('user.apscadvancedbatch2022.classppt');

Route::get('/apscadvancedbatch2022material', function () {
    return view('user.apscadvancedbatch2022.material');
})->name('user.apsc.advanced.batch.2022.material');

Route::get('/apscadvancedbatch2022paper', function () {
    return view('user.apscadvancedbatch2022.paper');
})->name('user.apsc.advanced.batch.2022.paper');

Route::get('/apscadvancedbatch2022test/{course}', function ($course) {
    return view('user.apscadvancedbatch2022.testmaterial', compact('course'));
})->name('user.apsc.advanced.batch.2022.testmaterial');

Route::get('/apscadvancedbatch2022plan', function () {
    return view('user.apscadvancedbatch2022.plan');
})->name('user.apsc.advanced.batch.2022.plan');

Route::get('/apscadvancedbatch2022currentaffairs', function () {
    return view('user.apscadvancedbatch2022.currentaffairs');
})->name('user.apsc.advanced.batch.2022.currentaffairs');

//foundation2023

Route::get('/foundmaterial2023', function () {
    return view('user.iasfoundation2023.material');
})->name('user.ias.foundation.2023.material');

Route::get('/foundpaper2023', function () {
    return view('user.iasfoundation2023.paper');
})->name('user.ias.foundation.2023.paper');

Route::get('/foundtest2023/{course}', function ($course) {
    return view('user.iasfoundation2023.testmaterial', compact('course'));
})->name('user.ias.foundation.2023.test');

Route::get('/foundplan2023', function () {
    return view('user.iasfoundation2023.plan');
})->name('user.ias.foundation.2023.plan');

Route::get('/foundrecorded2023', function () {
    return view('user.iasfoundation2023.recorded');
})->name('user.ias.foundation.2023.recorded');

//oldstudents
Route::get('/oldstudentsmaterial', function () {
    return view('user.oldstudents.material');
})->name('user.old.students.material');

Route::get('/oldstudentspaper', function () {
    return view('user.oldstudents.paper');
})->name('user.old.students.paper');

Route::get('/oldstudentsplan', function () {
    return view('user.oldstudents.plan');
})->name('user.old.students.plan');

Route::get('/oldstudentsrecorded', function () {
    return view('user.oldstudents.recorded');
})->name('user.old.students.recorded');


// new video
Route::get('user/new/video/main/{course}', function ($course) {
    $videos = \App\NewVideo::where('topic', 'Main')->where('course', $course)->get()->unique('sub_topic')->pluck('sub_topic');
    return view('user.new_videos.new_video_sub_main', compact('videos'));
})->name('user.new.video.main.topic');
Route::get('user/new/video/prelim/{course}', function ($course) {
    $videos = \App\NewVideo::where('topic', 'Prelims')->where('course', $course)->get()->unique('sub_topic')->pluck('sub_topic');
    return view('user.new_videos.new_video_sub_prelims', compact('videos'));
})->name('user.new.video.prelims.topic');

Route::get('user/new/videomain/{sub_topic}', function ($sub_topic) {
    $videos = \App\NewVideo::where('topic', 'Main')->where('sub_topic', $sub_topic)->get();
    return view('user.new_videos.new_video', compact('videos', 'sub_topic'));
})->name('user.new.video.main.sub');

Route::get('user/new/videoprelim/{sub_topic}', function ($sub_topic) {
    $videos = \App\NewVideo::where('topic', 'Prelims')->where('sub_topic', $sub_topic)->get();
    return view('user.new_videos.new_video', compact('videos', 'sub_topic'));
})->name('user.new.video.prelims.sub');

Route::get('user/new/video/{course}', function ($course) {
    return view('user.new_videos.new_video_index', compact('course'));
})->name('user.new.video');



Route::get('user/new/video/play/{id}', function ($id) {
    $video = \App\NewVideo::findOrFail($id);
    return view('user.new_videos.free_play', compact('video'));
})->name('user.new.video.play')->middleware('auth');


//apscfoundation2023 currentaffairs

Route::get('/apscfound2023material', function () {
    return view('user.apscfound2023.material');
})->name('user.apsc.found.2023.material');

Route::get('/apscfound2023paper', function () {
    return view('user.apscfound2023.paper');
})->name('user.apsc.found.2023.paper');

Route::get('/apscfound2023test/{course}', function ($course) {
    return view('user.apscfound2023.testmaterial', compact('course'));
})->name('user.apsc.found.2023.test');

Route::get('/apscfound2023plan', function () {
    return view('user.apscfound2023.plan');
})->name('user.apsc.found.2023.plan');

Route::get('/apscfound2023recorded', function () {
    return view('user.apscfound2023.recorded');
})->name('user.apsc.found.2023.recorded');

Route::get('/apscfound2023currentaffairs', function () {
    return view('user.apscfound2023.currentaffairs');
})->name('user.apsc.found.2023.currentaffairs');

//apscfoundation

Route::get('/apscfoundmaterial', function () {
    return view('user.apscfound.material');
})->name('user.apsc.found.material');

Route::get('/apscfoundpaper', function () {
    return view('user.apscfound.paper');
})->name('user.apsc.found.paper');

Route::get('/apscfoundtest/{course}', function ($course) {
    return view('user.apscfound.testmaterial', compact('course'));
})->name('user.apsc.found.test');

Route::get('/apscfoundplan', function () {
    return view('user.apscfound.plan');
})->name('user.apsc.found.plan');

Route::get('/apscfoundrecorded', function () {
    return view('user.apscfound.recorded');
})->name('user.apsc.found.recorded');


// new tests

Route::get('user/new/test/{course}', function ($course) {
    return view('user.new_tests.new_test_index', compact('course'));
})->name('user.new.test');

Route::get('user/new/test/main/{course}', function ($course) {
    $tests_subs = \App\NewTest::where('topic', 'Main')->where('course', $course)->get()->unique('sub_topic')->pluck('sub_topic');
    $tests = \App\NewTestSubTopic::whereIn('id', $tests_subs)->get()->pluck('sub_topic');
    return view('user.new_tests.new_test_sub_main', compact('tests'));
})->name('user.new.test.main.topic');

Route::get('user/new/test/prelim/{course}', function ($course) {
    $tests_subs = \App\NewTest::where('topic', 'Prelims')->where('course', $course)->get()->unique('sub_topic')->pluck('sub_topic');
    $tests = \App\NewTestSubTopic::whereIn('id', $tests_subs)->get()->pluck('sub_topic');

    return view('user.new_tests.new_test_sub_prelims', compact('tests'));
})->name('user.new.test.prelims.topic');

Route::get('user/new/testmain/{sub_topic}', function ($sub_topic) {
    $sub_topic_id = \App\NewTestSubTopic::where('sub_topic', $sub_topic)->get()->first()->id;
    $tests = \App\NewTest::where('topic', 'Main')->where('sub_topic', $sub_topic_id)->get();
    return view('user.new_tests.new_test', compact('tests', 'sub_topic'));
})->name('user.new.test.main.sub');

Route::get('user/new/testprelim/{sub_topic}', function ($sub_topic) {
    $sub_topic_id = \App\NewTestSubTopic::where('sub_topic', $sub_topic)->get()->first()->id;
    $tests = \App\NewTest::where('topic', 'Prelims')->where('sub_topic', $sub_topic_id)->get();
    return view('user.new_tests.new_test', compact('tests', 'sub_topic'));
})->name('user.new.test.prelims.sub');



//ias target 2022

Route::get('/iastargetbatch2022material', function () {
    return view('user.iastargetbatch2022.material');
})->name('user.ias.target.batch.2022.material');

Route::get('/iastargetbatch2022paper', function () {
    return view('user.iastargetbatch2022.paper');
})->name('user.ias.target.batch.2022.paper');

Route::get('/iastargetbatch2022test/{course}', function ($course) {
    return view('user.iastargetbatch2022.testmaterial', compact('course'));
})->name('user.ias.target.batch.2022.testmaterial');

Route::get('/iastargetbatch2022plan', function () {
    return view('user.iastargetbatch2022.plan');
})->name('user.ias.target.batch.2022.plan');


//advancedbatch2022(f-2)
Route::get('/advancedbatch2022(f-2)classppt', function () {
    return view('user.advancedbatch2022(f-2).classppt');
})->name('user.advancedbatch2022(f-2).classppt');

Route::get('/advancedbatch2022(f-2)material', function () {
    return view('user.advancedbatch2022(f-2).material');
})->name('user.advanced.batch.2022.material');

Route::get('/advancedbatch2022(f-2)paper', function () {
    return view('user.advancedbatch2022(f-2).paper');
})->name('user.advanced.batch.2022.(f-2).paper');

Route::get('/advancedbatch2022(f-2)test/{course}', function ($course) {
    return view('user.advancedbatch2022(f-2).testmaterial', compact('course'));
})->name('user.advanced.batch.2022.(f-2).testmaterial');

Route::get('/advancedbatch2022(f-2)plan', function () {
    return view('user.advancedbatch2022(f-2).plan');
})->name('user.advanced.batch.2022.(f-2).plan');

Route::get('/advancedbatch2022(f-2)recorded', function () {
    return view('user.advancedbatch2022(f-2).recorded');
})->name('user.advanced.batch.2022.(f-2).recorded');


// free course
Route::get('free/new/main/{course}', function ($course) {
    $videos = \App\ClassVideo::where('course', $course)->get();

    // $coupon = \App\Coupon::where('email', Auth::user()->email)->get()->first();

    return view('user.new_videos.free_video_sub_main', compact('videos', 'course'));
})->name('free.new.video.main.topic');

// new course ias exam 2021
Route::get('ias/exam/show/{id}', 'Study_material\StudyController@showIasExam')->name('ias.exam.show')->middleware('auth');


// user self create coupon routes
Route::get(
    'user/coupon/create',
    [\App\Http\Controllers\UserController::class, 'couponCreate']
)
    ->name('user.coupon.create');

Route::post(
    'user/coupon/store',
    [\App\Http\Controllers\UserController::class, 'couponStore']
)
    ->name('user.coupon.store');


// request coupon
Route::post(
    'user/request/coupon/store',
    [\App\Http\Controllers\RequestCouponController::class, 'store']
)
    ->name('user.request.coupon.store');
Route::get(
    'user/request/coupon/create',
    [\App\Http\Controllers\RequestCouponController::class, 'create']
)
    ->name('user.request.coupon.create');

//foundation2023(b-2)

Route::get('/found2023(b-2)material', function () {
    return view('user.foundation2023(b-2).material');
})->name('user.foundation.2023.(b-2).material');

Route::get('/found2023(b-2)paper', function () {
    return view('user.foundation2023(b-2).paper');
})->name('user.foundation.(b-2).2023.paper');

Route::get('/found2023test/{course}', function ($course) {
    return view('user.foundation2023(b-2).testmaterial', compact('course'));
})->name('user.foundation.2023.(b-2).test');

Route::get('/found2023plan', function () {
    return view('user.foundation2023(b-2).plan');
})->name('user.foundation.2023.(b-2).plan');

//apsc target 2022

Route::get('/apsctargetbatch2022material', function () {
    return view('user.apsctargetbatch2022.material');
})->name('user.apsc.target.batch.2022.material');

Route::get('/apsctargetbatch2022paper', function () {
    return view('user.apsctargetbatch2022.paper');
})->name('user.apsc.target.batch.2022.paper');

Route::get('/apsctargetbatch2022currentaffairs', function () {
    return view('user.apsctargetbatch2022.currentaffairs');
})->name('user.apsc.target.batch.2022.currentaffairs');

Route::get('/apsctargetbatch2022test/{course}', function ($course) {
    return view('user.apsctargetbatch2022.testmaterial', compact('course'));
})->name('user.apsc.target.batch.2022.testmaterial');

Route::get('/apsctargetbatch2022plan', function () {
    return view('user.apsctargetbatch2022.plan');
})->name('user.apsc.target.batch.2022.plan');

Route::get('/apsctargetbatch2022recorded', function () {
    return view('user.apsctargetbatch2022.recorded');
})->name('user.apsc.target.batch.2022.recorded');

// Rate Video
Route::post(
    '/video/rating/store',
    [\App\Http\Controllers\VideoRating::class, 'store']
)
    ->name('video.rating.store');

Route::post(
    '/video/rating-new/store',
    [\App\Http\Controllers\VideoRating::class, 'storeNew']
)
    ->name('video.rating-new.store');



//iasfoundation2023(batch-2)

Route::get('/iasfound2023(batch-2)material', function () {
    return view('user.iasfoundation2023(batch-2).material');
})->name('user.ias.foundation.2023.(batch-2).material');

Route::get('/iasfound2023(batch-2)paper', function () {
    return view('user.iasfoundation2023(batch-2).paper');
})->name('user.ias.foundation.(batch-2).2023.paper');

Route::get('/iasfound2023test(batch-2)/{course}', function ($course) {
    return view('user.iasfoundation2023(batch-2).testmaterial', compact('course'));
})->name('user.ias.foundation.2023.(batch-2).test');

Route::get('/iasfound2023plan(batch-2)', function () {
    return view('user.iasfoundation2023(batch-2).plan');
})->name('user.ias.foundation.2023.(batch-2).plan');


//apscfoundation2023(batch-2)

Route::get('/apscfound2023(batch-2)material', function () {
    return view('user.apscfoundation2023(batch-2).material');
})->name('user.apsc.foundation.2023.(batch-2).material');

Route::get('/apscfound2023(batch-2)paper', function () {
    return view('user.apscfoundation2023(batch-2).paper');
})->name('user.apsc.foundation.(batch-2).2023.paper');

Route::get('/apscfound2023test(batch-2)/{course}', function ($course) {
    return view('user.apscfoundation2023(batch-2).testmaterial', compact('course'));
})->name('user.apsc.foundation.2023.(batch-2).test');

Route::get('/apscfound2023plan(batch-2)', function () {
    return view('user.apscfoundation2023(batch-2).plan');
})->name('user.apsc.foundation.2023.(batch-2).plan');

//mainsdocuments

Route::get('/mainsdocuments', function () {
    return view('user.mainsdocument.mains');
})->name('maindocuments');



//article
Route::get(
    '/article/create',
    [\App\Http\Controllers\ArticleController::class, 'create']
)->name('article.create');
Route::post(
    '/article/store',
    [\App\Http\Controllers\ArticleController::class, 'store']
)->name('article.store');
Route::get(
    '/article/index',
    [\App\Http\Controllers\ArticleController::class, 'index']
)->name('article.index');
//notifications
Route::get(
    '/notifications',
    [\App\Http\Controllers\NotificationController::class, 'index']
)->name('notifications.index');

Route::get('/enroll', function () {
    // do something and redirect
    return redirect('home#ourcourses');
})->name('enroll');

//lifetimeaccessibleaccount
Route::get('/lifetimeaccessibleaccount/{course}', function ($course) {
    return view('user.lifetimeaccessibleaccount.testmaterial', compact('course'));
})->name('user.lifetimeaccessibleaccount.test');



//apscsucess

Route::get('/assamca', function () {
    return view('digipedia.assam');
});
Route::get('/assam2020', function () {
    return view('digipedia.assam2020');
});

Route::get('/acs2021', function () {
    return view('digipedia.acs2021');
});

Route::get('/acs2022', function () {
    return view('digipedia.acs2022');
})->name('acs.wisdom');


Route::get('/apscsucessmaterial', function () {
    return view('user.apscsucess.material');
})->name('user.apsc.sucess.material');

Route::get('/apscsucesspaper', function () {
    return view('user.apscsucess.paper');
})->name('user.apsc.sucess.paper');

Route::get('/apscsucesstest/{course}', function ($course) {
    return view('user.apscsucess.testmaterial', compact('course'));
})->name('user.apsc.sucess.test');

Route::get('/apscsucess', function () {
    return view('user.apscsucess.plan');
})->name('user.apsc.sucess.(b-2).plan');

Route::get('/apscsucesscurrentaffairs', function () {
    return view('user.apscsucess.currentaffairs');
})->name('user.apsc.sucess.currentaffairs');

Route::get('/apscsucessppt', function () {
    return view('user.apscsucess.ppt');
})->name('user.apsc.sucess.ppt');

//apscadvanced2022(batch-2)
Route::get('/apscadvanced2022(batch2)material', function () {
    return view('user.apsctarget2022(batch2).material');
})->name('user.apsc.advanced.2022.(batch2).material');

Route::get('/apscadvanced2022(batch2)paper', function () {
    return view('user.apsctarget2022(batch2).paper');
})->name('user.apsc.advanced.2022.(batch2).paper');

Route::get('/apscadvanced2022(batch2)/{course}', function ($course) {
    return view('user.apsctarget2022(batch2).testmaterial', compact('course'));
})->name('user.apsc.advanced.2022.(batch2).test');

Route::get('/apscadvanced2022(batch2)', function () {
    return view('user.apsctarget2022(batch2).plan');
})->name('user.apsc.advanced.2022.(batch2).plan');

//target2022(batch-2)
Route::get('/target2022(batch2)material', function () {
    return view('user.target2022(batch2).material');
})->name('user.target.2022.(batch2).material');

Route::get('/target2022(batch2)paper', function () {
    return view('user.target2022(batch2).paper');
})->name('user.target.2022.(batch2).paper');

Route::get('/target2022(batch2)/{course}', function ($course) {
    return view('user.target2022(batch2).testmaterial', compact('course'));
})->name('user.target.2022.(batch2).test');

Route::get('/target2022(batch2)', function () {
    return view('user.target2022(batch2).plan');
})->name('user.target.2022.(batch2).plan');


Route::get(
    '/dailynewsanalyse',
    [\App\Http\Controllers\DailyNewsAnalyseController::class, 'index']
)->name('dailynewsanalyse.index')->middleware('auth');

Route::middleware(['auth'])->group(function () {

    Route::get(
        '/dailynews',
        [\App\Http\Controllers\DailyNewsController::class, 'index']
    )->name('dailynews.index')->middleware('auth');

    Route::get(
        '/assignments',
        [\App\Http\Controllers\AssignmentController::class, 'index']
    )->name('assignments.index');
    Route::get(
        '/assignments/{type}',
        [\App\Http\Controllers\AssignmentController::class, 'show']
    )->name('assignments.show');
    Route::get(
        '/assignment/create/{id}',
        [\App\Http\Controllers\AssignmentController::class, 'create']
    )->name('assignment.create');
    Route::post(
        '/assignment/store/',
        [\App\Http\Controllers\AssignmentController::class, 'store']
    )->name('assignment.store');

    // classppt for ias target batch 2022

    Route::get('/iastargetbatch2022classppt', function () {
        return view('user.iastargetbatch2022.classppt');
    })->name('user.ias.target.batch.2022.classppt');

    // classppt for apsc target batch 2022

    Route::get('/apsctargetbatch2022classppt', function () {
        return view('user.apsctargetbatch2022.classppt');
    })->name('user.apsc.target.batch.2022.classppt');
});

// article current affairs

Route::get('/currentaffairs', function () {
    return view('article 2021.currentaffairs2021');
});

Route::get('/farmacts', function () {
    return view('article 2021.farmacts');
});

Route::get('/seditionlaw', function () {
    return view('article 2021.seditionlaw');
});
Route::get('/epidemicdiseasesact', function () {
    return view('article 2021.epidemicdiseasesact');
});
Route::get('/greentax', function () {
    return view('article 2021.greentax');
});
Route::get('/v-shaped', function () {
    return view('article 2021.v-shaped');
});
Route::get('/anubhavaMantapa', function () {
    return view('article 2021.anubhavaMantapa');
});

Route::get('/khadiprakrithik', function () {
    return view('article 2021.khadiprakrithik');
});

Route::get('/kheloindia', function () {
    return view('article 2021.kheloindia');
});

Route::get('/pathuraghat', function () {
    return view('article 2021.pathuraghat');
});

Route::get('/indiainnovationindex', function () {
    return view('article 2021.indiainnovationindex');
});

Route::get('/digitalpaymentindex', function () {
    return view('article 2021.digitalpayment');
});

Route::get('/Indiaasnon-permanentmemberofunsc', function () {
    return view('article 2021.nonparmanent');
});

Route::get('/Internationalenergyagency', function () {
    return view('article 2021.energy');
});

Route::get('/gerd', function () {
    return view('article 2021.gerd');
});

Route::get('/airQualityManagement', function () {
    return view('article 2021.airQuality');
});

Route::get('/nipunbharatmission', function () {
    return view('article 2021.nipun');
});

Route::get('/nationalayushmission', function () {
    return view('article 2021.national');
});

Route::get('/cooperationministry', function () {
    return view('article 2021.coorperation');
});

Route::get('/liverpool', function () {
    return view('article 2021.liverpool');
});

Route::get('/budget', function () {
    return view('article 2021.budget');
});

Route::get('/fire_safety', function () {
    return view('article 2021.fire_safety');
});

Route::get('/gandhian_strategy', function () {
    return view('article 2021.gandhian_strategy');
});

Route::get('/cop26', function () {
    return view('article 2021.cop26');
});

Route::get('/zerocovidpolicy', function () {
    return view('article 2021.zerocovidpolicy');
});

Route::get('/greenhydrogen', function () {
    return view('article 2021.greenhydrogen');
});

Route::get('/ken_betwa_river_interlinking_project', function () {
    return view('article 2021.ken_betwa_river_interlinking_project');
});

Route::get('/krishna_river_water_dispute', function () {
    return view('article 2021.krishna_river_water_dispute');
});

Route::get('/rights-of-person-with-disability-act', function () {
    return view('article 2021.rights_of_person_with_disability_act');
});

Route::get('/national_medical_commission', function () {
    return view('article 2021.national_medical_commission');
});

Route::get('/pm_poshan', function () {
    return view('article 2021.pm_poshan');
});

Route::get('/national_pension_system', function () {
    return view('article 2021.national_pension_system');
});

Route::get('/bharat_bond', function () {
    return view('article 2021.bharat_bond');
});

Route::get('/Jallikattu', function () {
    return view('article 2021.Jallikattu');
});

Route::get('/bail', function () {
    return view('article 2021.bail');
});

//foundation 2023 ppt

Route::get('/found2023ppt', function () {
    return view('user.iasfoundation2023.ppt');
})->name('user.ias.foundation.2023.ppt');

Route::get('/apscfound2023ppt', function () {
    return view('user.apscfound2023.ppt');
})->name('user.apsc.found.2023.ppt');

Route::get('/found2023(b-2)ppt', function () {
    return view('user.foundation2023(b-2).ppt');
})->name('user.foundation.2023(b-2).ppt');

//regular

Route::get('/regularmaterial', function () {
    return view('user.regular.material');
})->name('user.regular.material');

Route::get('/regularpaper', function () {
    return view('user.regular.paper');
})->name('user.regular.paper');

Route::get('/regulartest/{course}', function ($course) {
    return view('user.regular.testmaterial', compact('course'));
})->name('user.regular.(f-2).testmaterial');

Route::get('/regularplan', function () {
    return view('user.regular.plan');
})->name('user.regular.plan');

Route::get('/regularrecorded', function () {
    return view('user.regular.recorded');
})->name('user.regular.recorded');

//Answer key APSC

Route::get('/apsckey', function () {
    return view('digipedia.apsc_answer_key');
});
Route::get('/upsc_answer_key_2021', function () {
    return view('digipedia.apsc2021_answerkey');
});

// mark calculation
Route::get('/mark-calculate', function () {
    return view('calculation.index');
})->name('calculation.index');

Route::post('/mark-calculate/data', [\App\Http\Controllers\CalculatorController::class, 'store'])
    ->name('calculation.store');

//apsc_mains_2021
Route::get('/apsc_mains_2021material', function () {
    return view('user.apsc_mains_2021.material');
})->name('user.apsc.mains.2021.material');

Route::get('/apsc_mains_2021paper', function () {
    return view('user.apsc_mains_2021.paper');
})->name('user.apsc.mains.2021.paper');

Route::get('/apsc_mains_2021/{course}', function ($course) {
    return view('user.apsc_mains_2021.testmaterial', compact('course'));
})->name('user.apsc.mains.2021.test');

Route::get('/apsc_mains_2021', function () {
    return view('user.apsc_mains_2021.plan');
})->name('user.apsc.mains.2021.plan');

Route::get('/apsc_mains_2021', function () {
    return view('user.apsc_mains_2021.ppt');
})->name('user.apsc.mains.2021.ppt');

//iasrecorded

Route::get('/iasrecorded', function () {
    return view('user.iasrecorded.classppt');
})->name('user.ias.recorded.ppt');

// CURRENTS AFFAIRS BLOCK FOR USER

Route::get('/current_affairs_ppt', function () {
    return view('digipedia.current_affairs_user_ppt');
})->middleware('auth');

//target2022(batch-2)
Route::get('/ppttarget2022(batch2)', function () {
    return view('user.target2022(batch2).classppt');
})->name('user.target.2022.(batch2).ppt');

//apscadvanced2022(batch-2)
Route::get('/pptapscadvanced2022(batch2)', function () {
    return view('user.apsctarget2022(batch2).classppt');
})->name('user.apsc.advanced.2022.(batch2).ppt');

// APSC MAINS PYQ

Route::get('/mainspyq', function () {
    return view('user.apsc_mains_2021.mainspyq');
})->name('mainspyq');

Route::get('/apscmainsdocuments', function () {
    return view('digipedia.mains.apsc');
})->name('apscmaindocuments');

Route::get('/upscmainsdocuments', function () {
    return view('digipedia.mains.upsc');
})->name('upscmaindocuments');

Route::get('/mains/materials', function () {
    return view('user.apsc_mains_2021.material');
})->name('apsc.mains.materials');


Route::get('/export/details/upsc', [ExportController::class, 'upscExport'])->name('export.details.upsc');
Route::get('/export/details/apsc', [ExportController::class, 'apscExport'])->name('export.details.apsc');
Route::get('/export/details/study-material', [ExportController::class, 'studyMaterialExport'])->name('export.details.studyMaterial');
Route::get('/export/details/recorded', [ExportController::class, 'recordedExport'])->name('export.details.recorded');


//advanced_batch_2023
Route::get('/advanced_batch_2023material', function () {
    return view('user.advanced_batch_2023.material');
})->name('user.advanced.batch.2023.material');

Route::get('/advanced_batch_2023paper', function () {
    return view('user.advanced_batch_2023.paper');
})->name('user.advanced.batch.2023.paper');

Route::get('/advanced_batch_2023/test/{course}', function ($course) {
    return view('user.advanced_batch_2023.testmaterial', compact('course'));
})->name('user.advanced.batch.2023.test');

Route::get('/advanced_batch_2023/plan', function () {
    return view('user.advanced_batch_2023.plan');
})->name('user.advanced.batch.2023.plan');

Route::get('/advanced_batch_2023/ppt', function () {
    return view('user.advanced_batch_2023.classppt');
})->name('user.advanced.batch.2023.ppt');

//apsc_advanced_batch_2023
Route::get('/apsc_advanced_batch_2023material', function () {
    return view('user.apsc_advanced_batch_2023.material');
})->name('user.apsc.advanced.batch.2023.material');

Route::get('/apsc_advanced_batch_2023paper', function () {
    return view('user.apsc_advanced_batch_2023.paper');
})->name('user.apsc.advanced.batch.2023.paper');

Route::get('/apsc_advanced_batch_2023/test/{course}', function ($course) {
    return view('user.apsc_advanced_batch_2023.testmaterial', compact('course'));
})->name('user.apsc.advanced.batch.2023.test');

Route::get('/apsc_advanced_batch_2023/plan', function () {
    return view('user.apsc_advanced_batch_2023.plan');
})->name('user.apsc.advanced.batch.2023.plan');

Route::get('/apsc_advanced_batch_2023/ppt', function () {
    return view('user.apsc_advanced_batch_2023.classppt');
})->name('user.apsc.advanced.batch.2023.ppt');

//apsc_foundation_2024
Route::get('/apsc_foundation_2024material', function () {
    return view('user.apsc_foundation_2024.material');
})->name('user.apsc.foundation.2024.material');

Route::get('/apsc_foundation_2024paper', function () {
    return view('user.apsc_foundation_2024.paper');
})->name('user.apsc.foundation.2024.paper');

Route::get('/apsc_foundation_2024/test/{course}', function ($course) {
    return view('user.apsc_foundation_2024.testmaterial', compact('course'));
})->name('user.apsc.foundation.2024.test');

Route::get('/apsc_foundation_2024/plan', function () {
    return view('user.apsc_foundation_2024.plan');
})->name('user.apsc.foundation.2024.plan');

Route::get('/apsc_foundation_2024/ppt', function () {
    return view('user.apsc_foundation_2024.ppt');
})->name('user.apsc.foundation.2024.ppt');

//foundation_2024
Route::get('/foundation_2024material', function () {
    return view('user.foundation_2024.material');
})->name('user.foundation.2024.material');

Route::get('/foundation_2024paper', function () {
    return view('user.foundation_2024.paper');
})->name('user.foundation.2024.paper');

Route::get('/foundation_2024/test/{course}', function ($course) {
    return view('user.foundation_2024.testmaterial', compact('course'));
})->name('user.foundation.2024.test');

Route::get('/foundation_2024/plan', function () {
    return view('user.foundation_2024.plan');
})->name('user.foundation.2024.plan');

Route::get('/foundation_2024/ppt', function () {
    return view('user.foundation_2024.ppt');
})->name('user.foundation.2024.ppt');

// APSC MAINS 2021

Route::get('/apscmain2021_gs-1', function () {
    return view('digipedia.apscmain2021_gs1');
});

Route::get('/apscmain2021_gs-2', function () {
    return view('digipedia.apscmain2021_gs2');
});

Route::get('/apscmain2021_gs-3', function () {
    return view('digipedia.apscmain2021_gs3');
});

Route::get('/apscmain2021_gs-4', function () {
    return view('digipedia.apscmain2021_gs4');
});

Route::get('/apscmain2021_gs-5', function () {
    return view('digipedia.apscmain2021_gs5');
});

Route::get('/apscmain2021_geology', function () {
    return view('digipedia.apscmain2021_geology');
});

Route::get('/apscmain2021_gs4_day-1', function () {
    return view('digipedia.apscmain2021_gs4_day-1');
});

Route::get('/security_gs3', function () {
    return view('digipedia.security_gs3');
});

Route::get('/apscmain2021_gs4_ethics', function () {
    return view('digipedia.apscmain2021_gs4_ethics');
});

//offline_batch_2022_(batch-2)

Route::get('/offline_batch_2022_(batch-2)material', function () {
    return view('user.offline_batch_2022_(batch-2).material');
})->name('user.offline.batch.2022.(batch-2).material');

Route::get('/offline_batch_2022_(batch-2)paper', function () {
    return view('user.offline_batch_2022_(batch-2).paper');
})->name('user.offline.batch.2022.(batch-2).paper');

Route::get('/offline_batch_2022_(batch-2)/test/{course}', function ($course) {
    return view('user.offline_batch_2022_(batch-2).testmaterial', compact('course'));
})->name('user.offline.batch.2022.(batch-2).test');

Route::get('/offline_batch_2022_(batch-2)/plan', function () {
    return view('user.offline_batch_2022_(batch-2).plan');
})->name('user.offline.batch.2022.(batch-2).plan');

//apsc_mains_test_series

Route::get('/apsc_mains_test_seriespaper/{course}', function ($course) {
    return view('user.apsc_mains_test_series.paper', compact('course'));
})->name('user.apsc.mains.test.series.paper');

Route::get('/apsc_mains_test_seriesanswer/{course}', function ($course) {
    return view('user.apsc_mains_test_series.answer', compact('course'));
})->name('user.apsc.mains.test.series.answer');


// result for user 
Route::get('/user/result/cards/{course}', [ResultController::class, 'index'])->name('user.result.cards');

//revise_prelimsplan

Route::get('/revise_prelimsplan', function () {
    return view('user.revise_prelims.plan');
})->name('user.revise.prelims.plan');

Route::get('/revise_prelimsmaterial', function () {
    return view('user.revise_prelims.material');
})->name('user.revise.prelims.material');

Route::get('/revise_prelimspyq', function () {
    return view('user.revise_prelims.paper');
})->name('user.revise.prelims.pyq');

Route::get('/revise_prelimsquestion', function () {
    return view('user.revise_prelims.question');
})->name('user.revise.prelims.question');

Route::get('/revise_prelimsanswer', function () {
    return view('user.revise_prelims.answer');
})->name('user.revise.prelims.answer');


// store ias mock data
Route::post(
    '/ias_2022_revision_test/store',
    [\App\Http\Controllers\IasMocktestController::class, 'store']
)
    ->name('ias.mock.test.store');
//exam
Route::get('/ias_2022_revision_test', function () {
    return view('digipedia.exam.exam');
});
// admin route to view datas

Route::get('admin/IasMockTest/index',  [\App\Http\Controllers\AdminController\IasMockTest\IasMockTestController::class, 'index'])->name('admin.iasMockTest.index')
    ->middleware('auth', 'admin');

//iasfound2023(batch-2)

Route::get('/iasfound2023(batch-2)ppt', function () {
    return view('user.iasfoundation2023(batch-2).ppt');
})->name('user.ias.foundation.2023.(batch-2).ppt');

//apscfoundation2023(batch-2)

Route::get('/apscfound2023(batch-2)ppt', function () {
    return view('user.apscfoundation2023(batch-2).ppt');
})->name('user.apsc.foundation.2023.(batch-2).ppt');


// pdf view
Route::post('user/pdf-view/index', [\App\Http\Controllers\UserController::class, 'view_pdf'])
    ->name('user.pdf-view.index')
    ->middleware('auth');



// apsc all user side
Route::get('/apsc-all/pdf', function () {
    $datas = \App\ApscAll::latest()->get();
    return view('user.apsc_all.assam_tribune_analysis', compact('datas'));
})->name('apsc_all.pdfs')->middleware('auth');




//quiz route
Route::get('/quiz/{course}', [\App\Http\Controllers\Quiz\QuizController::class, 'index'])
    ->name('quiz.index')
    ->middleware('auth');

Route::get('/quiz/questions/{id}/{course_name}', [\App\Http\Controllers\Quiz\QuizController::class, 'questions'])
    ->name('quiz.questions')
    ->middleware('auth');

//question
Route::post('/quiz/question/submit', [\App\Http\Controllers\Quiz\QuizController::class, 'submit'])
    ->name('quiz.question.submit')
    ->middleware('auth');

Route::get('/quiz/result/view/{id}/{user_id}', [\App\Http\Controllers\Quiz\QuizController::class, 'result'])
    ->name('quiz.result.view')
    ->middleware('auth');

Route::post('/payment/installment/store', [\App\Http\Controllers\PaymentInstallmentController::class, 'storePaymentInstallment'])
    ->name('payment.installment.store')
    ->middleware('auth');


//advanced_batch_2023(A)
Route::get('/advanced_batch_2023(A)material', function () {
    return view('user.advanced_batch_2023(A).material');
})->name('user.advanced.batch.2023(A).material');

Route::get('/advanced_batch_2023(A)paper', function () {
    return view('user.advanced_batch_2023(A).paper');
})->name('user.advanced.batch.2023(A).paper');

Route::get('/advanced_batch_2023(A)/test/{course}', function ($course) {
    return view('user.advanced_batch_2023(A).testmaterial', compact('course'));
})->name('user.advanced.batch.2023(A).test');

Route::get('/advanced_batch_2023(A)/plan', function () {
    return view('user.advanced_batch_2023(A).plan');
})->name('user.advanced.batch.2023(A).plan');

Route::get('/advanced_batch_2023(A)/classppt', function () {
    return view('user.advanced_batch_2023(A).classppt');
})->name('user.advanced.batch.2023(A).classppt');


//advanced_batch_2024
Route::get('/advanced_batch_2024material', function () {
    return view('user.advanced_batch_2024.material');
})->name('user.advanced.batch.2024.material');

Route::get('/advanced_batch_2024paper', function () {
    return view('user.advanced_batch_2024.paper');
})->name('user.advanced.batch.2024.paper');

Route::get('/advanced_batch_2024/test/{course}', function ($course) {
    return view('user.advanced_batch_2024.testmaterial', compact('course'));
})->name('user.advanced.batch.2024.test');

Route::get('/advanced_batch_2024/plan', function () {
    return view('user.advanced_batch_2024.plan');
})->name('user.advanced.batch.2024.plan');

Route::get('/advanced_batch_2024/classppt', function () {
    return view('user.advanced_batch_2024.classppt');
})->name('user.advanced.batch.2024.classppt');


//apsc_advanced_batch_2023(A)
Route::get('/apsc_advanced_batch_2023(A)material', function () {
    return view('user.apsc_advanced_batch_2023(A).material');
})->name('user.apsc.advanced.batch.2023(A).material');

Route::get('/apsc_advanced_batch_2023(A)paper', function () {
    return view('user.apsc_advanced_batch_2023(A).paper');
})->name('user.apsc.advanced.batch.2023(A).paper');

Route::get('/apsc_advanced_batch_2023(A)/test/{course}', function ($course) {
    return view('user.apsc_advanced_batch_2023(A).testmaterial', compact('course'));
})->name('user.apsc.advanced.batch.2023(A).test');

Route::get('/apsc_advanced_batch_2023(A)/plan', function () {
    return view('user.apsc_advanced_batch_2023(A).plan');
})->name('user.apsc.advanced.batch.2023(A).plan');

Route::get('/apsc_advanced_batch_2023(A)/classppt', function () {
    return view('user.apsc_advanced_batch_2023(A).classppt');
})->name('user.apsc.advanced.batch.2023(A).classppt');

//advanced_batch_2024
Route::get('/apsc_advanced_batch_2024material', function () {
    return view('user.apsc_advanced_batch_2024.material');
})->name('user.apsc.advanced.batch.2024.material');

Route::get('/apsc_advanced_batch_2024paper', function () {
    return view('user.apsc_advanced_batch_2024.paper');
})->name('user.apsc.advanced.batch.2024.paper');

Route::get('/apsc_advanced_batch_2024/test/{course}', function ($course) {
    return view('user.apsc_advanced_batch_2024.testmaterial', compact('course'));
})->name('user.apsc.advanced.batch.2024.test');

Route::get('/apsc_advanced_batch_2024/plan', function () {
    return view('user.apsc_advanced_batch_2024.plan');
})->name('user.apsc.advanced.batch.2024.plan');

Route::get('/apsc_advanced_batch_2024/classppt', function () {
    return view('user.apsc_advanced_batch_2024.classppt');
})->name('user.apsc.advanced.batch.2024.classppt');

// userpoll routes
Route::get('/poll', [\App\Http\Controllers\Poll\PollController::class, 'index'])
    ->name('poll.index');
Route::get('/poll/{id}', [\App\Http\Controllers\Poll\PollController::class, 'show'])
    ->name('poll.show');
Route::post('/poll', [\App\Http\Controllers\Poll\PollController::class, 'store'])
    ->name('poll.store');

//APSC MAINS PYQ
Route::get('/apsc/pyq', function () {
    return view('user.apsc_all.apscmainspyq');
})->name('user.apsc.pyq')->middleware('auth');


// zoom webinar registration user routes

Route::get('/webinar-registration/create/{id}', [\App\Http\Controllers\Zoom\WebinarRegistrationController::class, 'create'])
    ->name('webinar-registration.create');

Route::post('/webinar-registration/store', [\App\Http\Controllers\Zoom\WebinarRegistrationController::class, 'store'])
    ->name('webinar-registration.store');


//Offline batch d-2023
Route::get('/offline_batch_(d-2023)/plan', function () {
    return view('user.offline_batch_(d-2023).plan');
})->name('user.recorded.offline.batch.d.2023.plan');

Route::get('/offline_batch_(d-2023)material', function () {
    return view('user.offline_batch_(d-2023).material');
})->name('user.recorded.offline.batch.d.2023.material');

Route::get('/offline_batch_(d-2023)paper', function () {
    return view('user.offline_batch_(d-2023).paper');
})->name('user.recorded.offline.batch.d.2023.paper');

Route::get('/offline_batch_(d-2023)/test/{course}', function ($course) {
    return view('user.offline_batch_(d-2023).testmaterial', compact('course'));
})->name('user.recorded.offline.batch.d.2023.test');

// Offline batch g -2023
Route::get('/offline_batch_(g-2023)/plan', function () {
    return view('user.offline_batch_(g-2023).plan');
})->name('user.recorded.offline.batch.g.2023.plan');

Route::get('/offline_batch_(g-2023)material', function () {
    return view('user.offline_batch_(g-2023).material');
})->name('user.recorded.offline.batch.g.2023.material');

Route::get('/offline_batch_(g-2023)paper', function () {
    return view('user.offline_batch_(g-2023).paper');
})->name('user.recorded.offline.batch.g.2023.paper');

Route::get('/offline_batch_(g-2023)/test/{course}', function ($course) {
    return view('user.offline_batch_(g-2023).testmaterial', compact('course'));
})->name('user.recorded.offline.batch.g.2023.test');

// Offline batch mrng-2022
Route::get('offline_batch_(mrng-2022)/plan', function () {
    return view('user.offline_batch_(mrng-2022).plan');
})->name('user.recorded.offline.batch.mrng.2022.plan');

Route::get('offline_batch_(mrng-2022)material', function () {
    return view('user.offline_batch_(mrng-2022).material');
})->name('user.recorded.offline.batch.mrng.2022.material');

Route::get('offline_batch_(mrng-2022)paper', function () {
    return view('user.offline_batch_(mrng-2022).paper');
})->name('user.recorded.offline.batch.mrng.2022.paper');

Route::get('offline_batch_(mrng-2022)/test/{course}', function ($course) {
    return view('user.offline_batch_(mrng-2022).testmaterial', compact('course'));
})->name('user.recorded.offline.batch.mrng.2022.test');
// event index
Route::get('/event', function () {
    return view('digipedia.event');
});
// eventdata store
Route::post('/eventdata', [\App\Http\Controllers\EventData\EventDataController::class, 'store'])
    ->name('eventdata.store');

// seminar index
Route::get('/seminar', function () {
    return view('digipedia.seminar');
});


// seminar store
Route::post('/seminar/store', [\App\Http\Controllers\SeminarController::class, 'store'])
    ->name('seminar.store');

// seminar index
Route::get('/offline_seminar', function () {
    return view('digipedia.offline_seminar');
});

// offline seminar store
Route::get('/offline_seminar', function () {
    return view('digipedia.offline_seminar');
});


//advanced_batch_2024(A)
Route::get('/advanced_batch_2024(A)material', function () {
    return view('user.advanced_batch_2024(A).material');
})->name('user.advanced.batch.2024(A).material');

Route::get('/advanced_batch_2024(A)paper', function () {
    return view('user.advanced_batch_2024(A).paper');
})->name('user.advanced.batch.2024(A).paper');

Route::get('/advanced_batch_2024(A)/test/{course}', function ($course) {
    return view('user.advanced_batch_2024(A).testmaterial', compact('course'));
})->name('user.advanced.batch.2024(A).test');

Route::get('/advanced_batch_2024(A)/plan', function () {
    return view('user.advanced_batch_2024(A).plan');
})->name('user.advanced.batch.2024(A).plan');

Route::get('/advanced_batch_2024(A)/classppt', function () {
    return view('user.advanced_batch_2024(A).classppt');
})->name('user.advanced.batch.2024(A).classppt');

//apsc_advanced_batch_2024(A)
Route::get('/apsc_advanced_batch_2024(A)material', function () {
    return view('user.apsc_advanced_batch_2024(A).material');
})->name('user.apsc.advanced.batch.2024(A).material');

Route::get('/apsc_advanced_batch_2024(A)paper', function () {
    return view('user.apsc_advanced_batch_2024(A).paper');
})->name('user.apsc.advanced.batch.2024(A).paper');

Route::get('/apsc_advanced_batch_2024(A)/test/{course}', function ($course) {
    return view('user.apsc_advanced_batch_2024(A).testmaterial', compact('course'));
})->name('user.apsc.advanced.batch.2024(A).test');

Route::get('/apsc_advanced_batch_2024(A)/plan', function () {
    return view('user.apsc_advanced_batch_2024(A).plan');
})->name('user.apsc.advanced.batch.2024(A).plan');

Route::get('/apsc_advanced_batch_2024(A)/classppt', function () {
    return view('user.apsc_advanced_batch_2024(A).classppt');
})->name('user.apsc.advanced.batch.2024(A).classppt');

//apsc prelims pyq

Route::get('/apsc-prelims-pyq', function () {
    return view('user.apsc_all.apsc_prelims_pyq');
})->name('user.apsc.prelims.pyq');

// exam registration

Route::get('/exam-registration', function () {
    return view('digipedia.exam');
});

// exam registration

Route::get('/scholarship-registration', function () {
    return view('digipedia.ghy_exam');
});


// apply job

Route::get('/apply-job', function () {
    return view('digipedia.job');
})->middleware('auth');

// apply job routes
Route::get('/apply-job/index', [\App\Http\Controllers\JobController::class, 'index'])
    ->name('job.index');
Route::post('/apply-job/store', [\App\Http\Controllers\JobController::class, 'store'])
    ->name('job.store');

//advanced csat gs 2

//advanced_csat_gs2

Route::get('/advanced_csat_gs2)material', function () {
    return view('user.advanced_csat_gs2.material');
})->name('user.advanced.csat.gs2.material');


Route::get('/advanced_csat_gs2/test/{course}', function ($course) {
    return view('user.advanced_csat_gs2.testmaterial', compact('course'));
})->name('user.advanced.csat.gs2.test');


//advanced_batch_2024(B)
Route::get('/advanced_batch_2024(B)material', function () {
    return view('user.advanced_batch_2024(B).material');
})->name('user.advanced.batch.2024(B).material');

Route::get('/advanced_batch_2024(B)paper', function () {
    return view('user.advanced_batch_2024(B).paper');
})->name('user.advanced.batch.2024(B).paper');

Route::get('/advanced_batch_2024(B)/test/{course}', function ($course) {
    return view('user.advanced_batch_2024(B).testmaterial', compact('course'));
})->name('user.advanced.batch.2024(B).test');

Route::get('/advanced_batch_2024(B)/plan', function () {
    return view('user.advanced_batch_2024(B).plan');
})->name('user.advanced.batch.2024(B).plan');

Route::get('/advanced_batch_2024(B)/classppt', function () {
    return view('user.advanced_batch_2024(B).classppt');
})->name('user.advanced.batch.2024(B).classppt');

//apsc_advanced_batch_2024(B)
Route::get('/apsc_advanced_batch_2024(B)material', function () {
    return view('user.apsc_advanced_batch_2024(B).material');
})->name('user.apsc.advanced.batch.2024(B).material');

Route::get('/apsc_advanced_batch_2024(B)paper', function () {
    return view('user.apsc_advanced_batch_2024(B).paper');
})->name('user.apsc.advanced.batch.2024(B).paper');

Route::get('/apsc_advanced_batch_2024(B)/test/{course}', function ($course) {
    return view('user.apsc_advanced_batch_2024(B).testmaterial', compact('course'));
})->name('user.apsc.advanced.batch.2024(B).test');

Route::get('/apsc_advanced_batch_2024(B)/plan', function () {
    return view('user.apsc_advanced_batch_2024(B).plan');
})->name('user.apsc.advanced.batch.2024(B).plan');

Route::get('/apsc_advanced_batch_2024(B)/classppt', function () {
    return view('user.apsc_advanced_batch_2024(B).classppt');
})->name('user.apsc.advanced.batch.2024(B).classppt');


//advanced_batch_2023(B)
Route::get('/advanced_batch_2023(B)material', function () {
    return view('user.advanced_batch_2023(B).material');
})->name('user.advanced.batch.2023(B).material');

Route::get('/advanced_batch_2023(B)paper', function () {
    return view('user.advanced_batch_2023(B).paper');
})->name('user.advanced.batch.2023(B).paper');

Route::get('/advanced_batch_2023(B)/test/{course}', function ($course) {
    return view('user.advanced_batch_2023(B).testmaterial', compact('course'));
})->name('user.advanced.batch.2023(B).test');

Route::get('/advanced_batch_2023(B)/plan', function () {
    return view('user.advanced_batch_2023(B).plan');
})->name('user.advanced.batch.2023(B).plan');

Route::get('/advanced_batch_2023(B)/classppt', function () {
    return view('user.advanced_batch_2023(B).classppt');
})->name('user.advanced.batch.2023(B).classppt');

//apsc_advanced_batch_2023(B)
Route::get('/apsc_advanced_batch_2023(B)material', function () {
    return view('user.apsc_advanced_batch_2023(B).material');
})->name('user.apsc.advanced.batch.2023(B).material');

Route::get('/apsc_advanced_batch_2023(B)paper', function () {
    return view('user.apsc_advanced_batch_2023(B).paper');
})->name('user.apsc.advanced.batch.2023(B).paper');

Route::get('/apsc_advanced_batch_2023(B)/test/{course}', function ($course) {
    return view('user.apsc_advanced_batch_2023(B).testmaterial', compact('course'));
})->name('user.apsc.advanced.batch.2023(B).test');

Route::get('/apsc_advanced_batch_2023(B)/plan', function () {
    return view('user.apsc_advanced_batch_2023(B).plan');
})->name('user.apsc.advanced.batch.2023(B).plan');

Route::get('/apsc_advanced_batch_2023(B)/classppt', function () {
    return view('user.apsc_advanced_batch_2023(B).classppt');
})->name('user.apsc.advanced.batch.2023(B).classppt');



// faculty wise polls
// userpoll routes
Route::get('/faculty-poll', [\App\Http\Controllers\FacultyPoll\FacultyPollController::class, 'index'])
    ->name('faculty.poll.index');
Route::get('/faculty-poll/view/{user_id}', [\App\Http\Controllers\FacultyPoll\FacultyPollController::class, 'view'])
    ->name('faculty.poll.view');
Route::get('/faculty-poll/{id}', [\App\Http\Controllers\FacultyPoll\FacultyPollController::class, 'show'])
    ->name('faculty.poll.show');
Route::post('/faculty-poll', [\App\Http\Controllers\FacultyPoll\FacultyPollController::class, 'store'])
    ->name('faculty.poll.store');

// Current Affair
Route::get(
    '/current-affair/{type}',
    [\App\Http\Controllers\CurrentAffairController::class, 'index']
)
    ->name('current.affair.index')->middleware('auth');
Route::get(
    '/current-affair/view/{current_affair}',
    [\App\Http\Controllers\CurrentAffairController::class, 'show']
)
    ->name('current.affair.show')->middleware('auth');






//test series quiz route
Route::get('/testseriesquiz/{course}/{type}', [\App\Http\Controllers\TestSeriesQuiz\TestSeriesQuizController::class, 'index'])
    ->name('testseriesquiz.index')
    ->middleware('auth');

Route::get('/testseriesquiz/questions/{id}/{course_name}/{type}', [\App\Http\Controllers\TestSeriesQuiz\TestSeriesQuizController::class, 'questions'])
    ->name('testseriesquiz.questions')
    ->middleware('auth');

//question
Route::post('/testseriesquiz/question/submit', [\App\Http\Controllers\TestSeriesQuiz\TestSeriesQuizController::class, 'submit'])
    ->name('testseriesquiz.question.submit')
    ->middleware('auth');

Route::get('/testseriesquiz/result/view/{id}', [\App\Http\Controllers\TestSeriesQuiz\TestSeriesQuizController::class, 'result'])
    ->name('testseriesquiz.result.view')
    ->middleware('auth');


//offline_batch_2022_(batch-2)

Route::get('/offline_batch_2022_(batch-2)/classppt', function () {
    return view('user.offline_batch_2022_(batch-2).classppt');
})->name('user.offline.batch.2022.(batch-2).classppt');

// Offline batch mrng-2022
Route::get('offline_batch_(mrng-2022)/classppt', function () {
    return view('user.offline_batch_(mrng-2022).classppt');
})->name('user.recorded.offline.batch.mrng.2022.classppt');

// Offline batch g -2023
Route::get('/offline_batch_(g-2023)/classppt', function () {
    return view('user.offline_batch_(g-2023).classppt');
})->name('user.recorded.offline.batch.g.2023.classppt');

//Offline batch d-2023
Route::get('/offline_batch_(d-2023)/classppt', function () {
    return view('user.offline_batch_(d-2023).classppt');
})->name('user.recorded.offline.batch.d.2023.classppt');


//toppers answers
Route::get('/toppers', function () {
    return view('digipedia.topper_answer.toppers');
});

Route::get('/essay', function () {
    return view('digipedia.topper_answer.essay');
});

Route::get('/gs-1', function () {
    return view('digipedia.topper_answer.gs-1');
});

Route::get('/gs-2', function () {
    return view('digipedia.topper_answer.gs-2');
});

Route::get('/gs-3', function () {
    return view('digipedia.topper_answer.gs-3');
});

Route::get('/gs-4', function () {
    return view('digipedia.topper_answer.gs-4');
});


//ias_booster_course(c)
Route::get('/ias_booster_course(c)material', function () {
    return view('user.ias_booster_course(c).material');
})->name('user.ias.booster.course(c).material');

Route::get('/ias_booster_course(c)paper', function () {
    return view('user.ias_booster_course(c).paper');
})->name('user.ias.booster.course(c).paper');

Route::get('/ias_booster_course(c)/test/{course}', function ($course) {
    return view('user.ias_booster_course(c).testmaterial', compact('course'));
})->name('user.ias.booster.course(c).test');

Route::get('/ias_booster_course(c)/plan', function () {
    return view('user.ias_booster_course(c).plan');
})->name('user.ias.booster.course(c).plan');

Route::get('/ias_booster_course(c)/classppt', function () {
    return view('user.ias_booster_course(c).classppt');
})->name('user.ias.booster.course(c).classppt');

//apsc_booster_course(c)
Route::get('/apsc_booster_course(c)material', function () {
    return view('user.apsc_booster_course(c).material');
})->name('user.apsc.booster.course(c).material');

Route::get('/apsc_booster_course(c)paper', function () {
    return view('user.apsc_booster_course(c).paper');
})->name('user.apsc.booster.course(c).paper');

Route::get('/apsc_booster_course(c)/test/{course}', function ($course) {
    return view('user.apsc_booster_course(c).testmaterial', compact('course'));
})->name('user.apsc.booster.course(c).test');

Route::get('/apsc_booster_course(c)/plan', function () {
    return view('user.apsc_booster_course(c).plan');
})->name('user.apsc.booster.course(c).plan');

Route::get('/apsc_booster_course(c)/classppt', function () {
    return view('user.apsc_booster_course(c).classppt');
})->name('user.apsc.booster.course(c).classppt');


//advanced_batch(c)
Route::get('/advanced_batch(c)material', function () {
    return view('user.advanced_batch(c).material');
})->name('user.advanced.batch(c).material');

Route::get('/advanced_batch(c)paper', function () {
    return view('user.advanced_batch(c).paper');
})->name('user.advanced.batch(c).paper');

Route::get('/advanced_batch(c)/test/{course}', function ($course) {
    return view('user.advanced_batch(c).testmaterial', compact('course'));
})->name('user.advanced.batch(c).test');

Route::get('/advanced_batch(c)/plan', function () {
    return view('user.advanced_batch(c).plan');
})->name('user.advanced.batch(c).plan');

Route::get('/advanced_batch(c)/classppt', function () {
    return view('user.advanced_batch(c).classppt');
})->name('user.advanced.batch(c).classppt');

//apsc_advanced_batch(c)
Route::get('/apsc_advanced_batch(c)material', function () {
    return view('user.apsc_advanced_batch(c).material');
})->name('user.apsc.advanced.batch(c).material');

Route::get('/apsc_advanced_batch(c)paper', function () {
    return view('user.apsc_advanced_batch(c).paper');
})->name('user.apsc.advanced.batch(c).paper');

Route::get('/apsc_advanced_batch(c)/test/{course}', function ($course) {
    return view('user.apsc_advanced_batch(c).testmaterial', compact('course'));
})->name('user.apsc.advanced.batch(c).test');

Route::get('/apsc_advanced_batch(c)/plan', function () {
    return view('user.apsc_advanced_batch(c).plan');
})->name('user.apsc.advanced.batch(c).plan');

Route::get('/apsc_advanced_batch(c)/classppt', function () {
    return view('user.apsc_advanced_batch(c).classppt');
})->name('user.apsc.advanced.batch(c).classppt');

//acs+
Route::get('/acs+material', function () {
    return view('user.acs+.material');
})->name('user.acs+.material');

Route::get('/acs+paper', function () {
    return view('user.acs+.paper');
})->name('user.acs+.paper');

Route::get('/acs+/classppt', function () {
    return view('user.acs+.classppt');
})->name('user.acs+.classppt');

Route::get('/prelims-faq', [\App\Http\Controllers\PrelimsFaqController::class, 'index'])
    ->name('prelims.faq');


//Offline batch d-2023 batch-2
Route::get('/offline_batch_(d-2023)_batch-2/plan', function () {
    return view('user.offline_batch_(d-2023)_batch-2.plan');
})->name('user.recorded.offline.batch.d.2023.batch-2.plan');

Route::get('/offline_batch_(d-2023)_batch-2material', function () {
    return view('user.offline_batch_(d-2023)_batch-2.material');
})->name('user.recorded.offline.batch.d.2023.batch-2.material');

Route::get('/offline_batch_(d-2023)_batch-2paper', function () {
    return view('user.offline_batch_(d-2023)_batch-2.paper');
})->name('user.recorded.offline.batch.d.2023.batch-2.paper');

Route::get('/offline_batch_(d-2023)_batch-2/test/{course}', function ($course) {
    return view('user.offline_batch_(d-2023)_batch-2.testmaterial', compact('course'));
})->name('user.recorded.offline.batch.d.2023.batch-2.test');

// Offline batch g -2023
Route::get('/offline_batch_(g-2023)_batch-2/plan', function () {
    return view('user.offline_batch_(g-2023)_batch-2.plan');
})->name('user.recorded.offline.batch.g.2023.batch-2.plan');

Route::get('/offline_batch_(g-2023)_batch-2material', function () {
    return view('user.offline_batch_(g-2023)_batch-2.material');
})->name('user.recorded.offline.batch.g.2023.batch-2.material');

Route::get('/offline_batch_(g-2023)_batch-2paper', function () {
    return view('user.offline_batch_(g-2023)_batch-2.paper');
})->name('user.recorded.offline.batch.g.2023.batch-2.paper');

Route::get('/offline_batch_(g-2023)_batch-2/test/{course}', function ($course) {
    return view('user.offline_batch_(g-2023)_batch-2.testmaterial', compact('course'));
})->name('user.recorded.offline.batch.g.2023.batch-2.test');


//apsc.prelims.focus

//ias_booster_course(d)
Route::get('/ias_booster_course(d)material', function () {
    return view('user.ias_booster_course(d).material');
})->name('user.ias.booster.course(d).material');

Route::get('/ias_booster_course(d)paper', function () {
    return view('user.ias_booster_course(d).paper');
})->name('user.ias.booster.course(d).paper');

Route::get('/ias_booster_course(d)/test/{course}', function ($course) {
    return view('user.ias_booster_course(d).testmaterial', compact('course'));
})->name('user.ias.booster.course(d).test');

Route::get('/ias_booster_course(d)/plan', function () {
    return view('user.ias_booster_course(d).plan');
})->name('user.ias.booster.course(d).plan');

Route::get('/ias_booster_course(d)/classppt', function () {
    return view('user.ias_booster_course(d).classppt');
})->name('user.ias.booster.course(d).classppt');

//apsc_booster_course(d)
Route::get('/apsc_booster_course(d)material', function () {
    return view('user.apsc_booster_course(d).material');
})->name('user.apsc.booster.course(d).material');

Route::get('/apsc_booster_course(d)paper', function () {
    return view('user.apsc_booster_course(d).paper');
})->name('user.apsc.booster.course(d).paper');

Route::get('/apsc_booster_course(d)/test/{course}', function ($course) {
    return view('user.apsc_booster_course(d).testmaterial', compact('course'));
})->name('user.apsc.booster.course(d).test');

Route::get('/apsc_booster_course(d)/plan', function () {
    return view('user.apsc_booster_course(d).plan');
})->name('user.apsc.booster.course(d).plan');

Route::get('/apsc_booster_course(d)/classppt', function () {
    return view('user.apsc_booster_course(d).classppt');
})->name('user.apsc.booster.course(d).classppt');

//apsc_prelims_focus
Route::get('/apsc_prelims_focusmaterial', function () {
    return view('user.apsc_prelims_focus.material');
})->name('user.apsc.prelims.focus.material');

Route::get('/apsc_prelims_focuspaper', function () {
    return view('user.apsc_prelims_focus.paper');
})->name('user.apsc.prelims.focus.paper');

Route::get('/apsc_prelims_focus/test/{course}', function ($course) {
    return view('user.apsc_prelims_focus.testmaterial', compact('course'));
})->name('user.apsc.prelims.focus.test');

Route::get('/apsc_prelims_focus/plan', function () {
    return view('user.apsc_prelims_focus.plan');
})->name('user.apsc.prelims.focus.plan');

Route::get('/apsc_prelims_focus/classppt', function () {
    return view('user.apsc_prelims_focus.classppt');
})->name('user.apsc.prelims.focus.classppt');


//90days_booster_course_offline
Route::get('/90days_booster_course_offlinematerial', function () {
    return view('user.90days_booster_course_offline.material');
})->name('user.90days.booster.course.offline.material');

Route::get('/90days_booster_course_offlinepaper', function () {
    return view('user.90days_booster_course_offline.paper');
})->name('user.90days.booster.course.offline.paper');

Route::get('/90days_booster_course_offline/test/{course}', function ($course) {
    return view('user.90days_booster_course_offline.testmaterial', compact('course'));
})->name('user.90days.booster.course.offline.test');

Route::get('/90days_booster_course_offline/plan', function () {
    return view('user.90days_booster_course_offline.plan');
})->name('user.90days.booster.course.offline.plan');

Route::get('/90days_booster_course_offline/classppt', function () {
    return view('user.90days_booster_course_offline.classppt');
})->name('user.90days.booster.course.offline.classppt');

//APSC 2023TEST SERIES
Route::get('/apsc_2023_test_series_material', function () {
    return view('user.apsc_2023_test_series.material');
})->name('user.apsc.2023.test.series.material');


//20 DAYS FREE BOOSTER COURSE
Route::get('/20_days_free_booster_course_material', function () {
    return view('user.20_days_free_booster_course.material');
})->name('user.20.days.free.booster.course.material');

Route::get('/20_days_free_booster_coursepaper', function () {
    return view('user.20_days_free_booster_course.paper');
})->name('user.20.days.free.booster.course.paper');

Route::get('/20_days_free_booster_course/test/{course}', function ($course) {
    return view('user.20_days_free_booster_course.testmaterial', compact('course'));
})->name('user.20.days.free.booster.course.test');

Route::get('/20_days_free_booster_course/plan', function () {
    return view('user.20_days_free_booster_course.plan');
})->name('user.20.days.free.booster.course.plan');

Route::get('/20_days_free_booster_course/classppt', function () {
    return view('user.20_days_free_booster_course.classppt');
})->name('user.20.days.free.booster.course.classppt');


//ias_booster_course(e)
Route::get('/ias_booster_course(e)material', function () {
    return view('user.ias_booster_course(e).material');
})->name('user.ias.booster.course(e).material');

Route::get('/ias_booster_course(e)paper', function () {
    return view('user.ias_booster_course(e).paper');
})->name('user.ias.booster.course(e).paper');

Route::get('/ias_booster_course(e)/test/{course}', function ($course) {
    return view('user.ias_booster_course(e).testmaterial', compact('course'));
})->name('user.ias.booster.course(e).test');

Route::get('/ias_booster_course(e)/plan', function () {
    return view('user.ias_booster_course(e).plan');
})->name('user.ias.booster.course(e).plan');

Route::get('/ias_booster_course(e)/classppt', function () {
    return view('user.ias_booster_course(e).classppt');
})->name('user.ias.booster.course(e).classppt');

//apsc_booster_course(e)
Route::get('/apsc_booster_course(e)material', function () {
    return view('user.apsc_booster_course(e).material');
})->name('user.apsc.booster.course(e).material');

Route::get('/apsc_booster_course(e)paper', function () {
    return view('user.apsc_booster_course(e).paper');
})->name('user.apsc.booster.course(e).paper');

Route::get('/apsc_booster_course(e)/test/{course}', function ($course) {
    return view('user.apsc_booster_course(e).testmaterial', compact('course'));
})->name('user.apsc.booster.course(e).test');

Route::get('/apsc_booster_course(e)/plan', function () {
    return view('user.apsc_booster_course(e).plan');
})->name('user.apsc.booster.course(e).plan');

Route::get('/apsc_booster_course(e)/classppt', function () {
    return view('user.apsc_booster_course(e).classppt');
})->name('user.apsc.booster.course(e).classppt');

//apsc_booster_course(f)
Route::get('/apsc_booster_course(f)material', function () {
    return view('user.apsc_booster_course(f).material');
})->name('user.apsc.booster.course(f).material');

Route::get('/apsc_booster_course(f)paper', function () {
    return view('user.apsc_booster_course(f).paper');
})->name('user.apsc.booster.course(f).paper');

Route::get('/apsc_booster_course(f)/test/{course}', function ($course) {
    return view('user.apsc_booster_course(f).testmaterial', compact('course'));
})->name('user.apsc.booster.course(f).test');

Route::get('/apsc_booster_course(f)/plan', function () {
    return view('user.apsc_booster_course(f).plan');
})->name('user.apsc.booster.course(f).plan');

Route::get('/apsc_booster_course(f)/classppt', function () {
    return view('user.apsc_booster_course(f).classppt');
})->name('user.apsc.booster.course(f).classppt');

//apsc_booster_course(g)
Route::get('/apsc_booster_course(g)material', function () {
    return view('user.apsc_booster_course(g).material');
})->name('user.apsc.booster.course(g).material');

Route::get('/apsc_booster_course(g)paper', function () {
    return view('user.apsc_booster_course(g).paper');
})->name('user.apsc.booster.course(g).paper');

Route::get('/apsc_booster_course(g)/test/{course}', function ($course) {
    return view('user.apsc_booster_course(g).testmaterial', compact('course'));
})->name('user.apsc.booster.course(g).test');

Route::get('/apsc_booster_course(g)/plan', function () {
    return view('user.apsc_booster_course(g).plan');
})->name('user.apsc.booster.course(g).plan');

Route::get('/apsc_booster_course(g)/classppt', function () {
    return view('user.apsc_booster_course(g).classppt');
})->name('user.apsc.booster.course(g).classppt');

//ghy_booster_course(g)
Route::get('/ghy_booster_course(g)material', function () {
    return view('user.ghy_booster_course(g).material');
})->name('user.ghy.booster.course(g).material');

Route::get('/ghy_booster_course(g)paper', function () {
    return view('user.ghy_booster_course(g).paper');
})->name('user.ghy.booster.course(g).paper');

Route::get('/ghy_booster_course(g)/test/{course}', function ($course) {
    return view('user.ghy_booster_course(g).testmaterial', compact('course'));
})->name('user.ghy.booster.course(g).test');

Route::get('/ghy_booster_course(g)/plan', function () {
    return view('user.ghy_booster_course(g).plan');
})->name('user.ghy.booster.course(g).plan');

Route::get('/ghy_booster_course(g)/classppt', function () {
    return view('user.ghy_booster_course(g).classppt');
})->name('user.ghy.booster.course(g).classppt');

//ias_booster_course(f)
Route::get('/ias_booster_course(f)material', function () {
    return view('user.ias_booster_course(f).material');
})->name('user.ias.booster.course(f).material');

Route::get('/ias_booster_course(f)paper', function () {
    return view('user.ias_booster_course(f).paper');
})->name('user.ias.booster.course(f).paper');

Route::get('/ias_booster_course(f)/test/{course}', function ($course) {
    return view('user.ias_booster_course(f).testmaterial', compact('course'));
})->name('user.ias.booster.course(f).test');

Route::get('/ias_booster_course(f)/plan', function () {
    return view('user.ias_booster_course(f).plan');
})->name('user.ias.booster.course(f).plan');

Route::get('/ias_booster_course(f)/classppt', function () {
    return view('user.ias_booster_course(f).classppt');
})->name('user.ias.booster.course(f).classppt');

//ias_booster_course(g)
Route::get('/ias_booster_course(g)material', function () {
    return view('user.ias_booster_course(g).material');
})->name('user.ias.booster.course(g).material');

Route::get('/ias_booster_course(g)paper', function () {
    return view('user.ias_booster_course(g).paper');
})->name('user.ias.booster.course(g).paper');

Route::get('/ias_booster_course(g)/test/{course}', function ($course) {
    return view('user.ias_booster_course(g).testmaterial', compact('course'));
})->name('user.ias.booster.course(g).test');

Route::get('/ias_booster_course(g)/plan', function () {
    return view('user.ias_booster_course(g).plan');
})->name('user.ias.booster.course(g).plan');

Route::get('/ias_booster_course(g)/classppt', function () {
    return view('user.ias_booster_course(g).classppt');
})->name('user.ias.booster.course(g).classppt');

//apsc_indian_economy_recorded
Route::get('/apsc_indian_economy_recordedmaterial', function () {
    return view('user.apsc_indian_economy_recorded.material');
})->name('user.apsc.indian.economy.recorded.material');

Route::get('/apsc_indian_economy_recordedpaper', function () {
    return view('user.apsc_indian_economy_recorded.paper');
})->name('user.apsc.indian.economy.recorded.paper');

Route::get('/apsc_indian_economy_recorded/plan', function () {
    return view('user.apsc_indian_economy_recorded.plan');
})->name('user.apsc.indian.economy.recorded.plan');

Route::get('/apsc_indian_economy_recorded/classppt', function () {
    return view('user.apsc_indian_economy_recorded.classppt');
})->name('user.apsc.indian.economy.recorded.classppt');

//upsc_indian_economy_recorded
Route::get('/upsc_indian_economy_recordedmaterial', function () {
    return view('user.upsc_indian_economy_recorded.material');
})->name('user.upsc.indian.economy.recorded.material');

Route::get('/upsc_indian_economy_recordedpaper', function () {
    return view('user.upsc_indian_economy_recorded.paper');
})->name('user.upsc.indian.economy.recorded.paper');

Route::get('/upsc_indian_economy_recorded/plan', function () {
    return view('user.upsc_indian_economy_recorded.plan');
})->name('user.upsc.indian.economy.recorded.plan');

Route::get('/upsc_indian_economy_recorded/classppt', function () {
    return view('user.upsc_indian_economy_recorded.classppt');
})->name('user.upsc.indian.economy.recorded.classppt');

//apsc_history_art_recorded
Route::get('/apsc_history_art_recordedmaterial', function () {
    return view('user.apsc_history_art_recorded.material');
})->name('user.apsc.history.art.recorded.material');

Route::get('/apsc_history_art_recordedpaper', function () {
    return view('user.apsc_history_art_recorded.paper');
})->name('user.apsc.history.art.recorded.paper');

Route::get('/apsc_history_art_recorded/plan', function () {
    return view('user.apsc_history_art_recorded.plan');
})->name('user.apsc.history.art.recorded.plan');

Route::get('/apsc_history_art_recorded/classppt', function () {
    return view('user.apsc_history_art_recorded.classppt');
})->name('user.apsc.history.art.recorded.classppt');

//upsc_history_art_recorded
Route::get('/upsc_history_art_recordedmaterial', function () {
    return view('user.upsc_history_art_recorded.material');
})->name('user.upsc.history.art.recorded.material');

Route::get('/upsc_history_art_recordedpaper', function () {
    return view('user.upsc_history_art_recorded.paper');
})->name('user.upsc.history.art.recorded.paper');

Route::get('/upsc_history_art_recorded/plan', function () {
    return view('user.upsc_history_art_recorded.plan');
})->name('user.upsc.history.art.recorded.plan');

Route::get('/upsc_history_art_recorded/classppt', function () {
    return view('user.upsc_history_art_recorded.classppt');
})->name('user.upsc.history.art.recorded.classppt');

//apsc_geography_recorded
Route::get('/apsc_geography_recordedmaterial', function () {
    return view('user.apsc_geography_recorded.material');
})->name('user.apsc.geography.recorded.material');

Route::get('/apsc_geography_recordedpaper', function () {
    return view('user.apsc_geography_recorded.paper');
})->name('user.apsc.geography.recorded.paper');

Route::get('/apsc_geography_recorded/plan', function () {
    return view('user.apsc_geography_recorded.plan');
})->name('user.apsc.geography.recorded.plan');

Route::get('/apsc_geography_recorded/classppt', function () {
    return view('user.apsc_geography_recorded.classppt');
})->name('user.apsc.geography.recorded.classppt');

//upsc_geography_recorded
Route::get('/upsc_geography_recorded/material', function () {
    return view('user.upsc_geography_recorded.material');
})->name('user.upsc.geography.recorded.material');

Route::get('/upsc_geography_recorded/paper', function () {
    return view('user.upsc_geography_recorded.paper');
})->name('user.upsc.geography.recorded.paper');

Route::get('/upsc_geography_recorded/plan', function () {
    return view('user.upsc_geography_recorded.plan');
})->name('user.upsc.geography.recorded.plan');

Route::get('/upsc_geography_recorded/classppt', function () {
    return view('user.upsc_geography_recorded.classppt');
})->name('user.upsc.geography.recorded.classppt');

//apsc_eco&env_recorded
Route::get('/apsc_eco&env_recordedmaterial', function () {
    return view('user.apsc_eco&env_recorded.material');
})->name('user.apsc.eco&env.recorded.material');

Route::get('/apsc_eco&env_recordedpaper', function () {
    return view('user.apsc_eco&env_recorded.paper');
})->name('user.apsc.eco&env.recorded.paper');

Route::get('/apsc_eco&env_recorded/plan', function () {
    return view('user.apsc_eco&env_recorded.plan');
})->name('user.apsc.eco&env.recorded.plan');

Route::get('/apsc_eco&env_recorded/classppt', function () {
    return view('user.apsc_eco&env_recorded.classppt');
})->name('user.apsc.eco&env.recorded.classppt');

//upsc_eco&env_recorded
Route::get('/upsc_eco&env_recorded/material', function () {
    return view('user.upsc_eco&env_recorded.material');
})->name('user.upsc.eco&env.recorded.material');

Route::get('/upsc_eco&env_recorded/paper', function () {
    return view('user.upsc_eco&env_recorded.paper');
})->name('user.upsc.eco&env.recorded.paper');

Route::get('/upsc_eco&env_recorded/plan', function () {
    return view('user.upsc_eco&env_recorded.plan');
})->name('user.upsc.eco&env.recorded.plan');

Route::get('/upsc_eco&env_recorded/classppt', function () {
    return view('user.upsc_eco&env_recorded.classppt');
})->name('user.upsc.eco&env.recorded.classppt');

//apsc_science_tech_recorded
Route::get('/apsc_science_tech_recordedmaterial', function () {
    return view('user.apsc_science_tech_recorded.material');
})->name('user.apsc.science.tech.recorded.material');

Route::get('/apsc_science_tech_recordedpaper', function () {
    return view('user.apsc_science_tech_recorded.paper');
})->name('user.apsc.science.tech.recorded.paper');

Route::get('/apsc_science_tech_recorded/plan', function () {
    return view('user.apsc_science_tech_recorded.plan');
})->name('user.apsc.science.tech.recorded.plan');

Route::get('/apsc_science_tech_recorded/classppt', function () {
    return view('user.apsc_science_tech_recorded.classppt');
})->name('user.apsc.science.tech.recorded.classppt');


//upsc_science_tech_recorded
Route::get('/upsc_science_tech_recorded/material', function () {
    return view('user.upsc_science_tech_recorded.material');
})->name('user.upsc.science.tech.recorded.material');

Route::get('/upsc_science_tech_recorded/paper', function () {
    return view('user.upsc_science_tech_recorded.paper');
})->name('user.upsc.science.tech.recorded.paper');

Route::get('/upsc_science_tech_recorded/plan', function () {
    return view('user.upsc_science_tech_recorded.plan');
})->name('user.upsc.science.tech.recorded.plan');

Route::get('/upsc_science_tech_recorded/classppt', function () {
    return view('user.upsc_science_tech_recorded.classppt');
})->name('user.upsc.science.tech.recorded.classppt');

//apsc_crash_course
Route::get('/apsc_crash_coursematerial', function () {
    return view('user.apsc_crash_course.material');
})->name('user.apsc.crash.course.material');

Route::get('/apsc_crash_coursepaper', function () {
    return view('user.apsc_crash_course.paper');
})->name('user.apsc.crash.course.paper');

Route::get('/apsc_crash_course/plan', function () {
    return view('user.apsc_crash_course.plan');
})->name('user.apsc.crash.course.plan');

Route::get('/apsc_crash_course/classppt', function () {
    return view('user.apsc_crash_course.classppt');
})->name('user.apsc.crash.course.classppt');



//mock_test
Route::get('/mock_testmaterial', function () {
    return view('user.mock_test.material');
})->name('user.mock.test.material');




//history_of_assam
Route::get('/history_of_assam_material', function () {
    return view('user.history_of_assam.material');
})->name('user.history.of.assam.material');

Route::get('/history_of_assam/classppt', function () {
    return view('user.history_of_assam.classppt');
})->name('user.history.of.assam.classppt');

//_recorded_classes
Route::get('/acs_recorded_classes', function () {
    return view('recorded.recorded_course');
});

Route::get('/apsc_recorded_classes', function () {
    return view('recorded.apsc_all_recorded_course');
});

Route::get('/upsc_recorded_course', function () {
    return view('recorded.upsc_recorded_course');
});

//csat_current_affairs
Route::get('/csat_current_affairs/classppt', function () {
    return view('user.csat_current_affairs.classppt');
})->name('user.csat.current.affairs.classppt');

Route::get('/one_liner_general_current_affairs', function () {
    return view('user.csat_current_affairs.one');
})->name('user.csat.current.affairs.one');


//5 Day Free Master Class
Route::get('/free_master_class/material', function () {
    return view('user.free_master_class.material');
})->name('user.free.master.class.material');

Route::get('/free_master_class/paper', function () {
    return view('user.free_master_class.paper');
})->name('user.free.master.class.paper');

Route::get('/free_master_class/plan', function () {
    return view('user.free_master_class.plan');
})->name('user.free.master.class.plan');

Route::get('/free_master_class/classppt', function () {
    return view('user.free_master_class.classppt');
})->name('user.free.master.class.classppt');

//free kit
Route::get('/free_master_class/assam_history', function () {
    return view('user.free_master_class.assam_history');
})->name('user.free.master.class.assam_history');

Route::get('/free_master_class/parks_of_assam', function () {
    return view('user.free_master_class.parks');
})->name('user.free.master.class.parks');

Route::get('/free_master_class/parks_of_assam', function () {
    return view('user.free_master_class.parks');
})->name('user.free.master.class.parks');

Route::get('/free_master_class/bridges_over_brahmaputra', function () {
    return view('user.free_master_class.bridges');
})->name('user.free.master.class.bridges');

Route::get('/free_master_class/missiles_of_inida', function () {
    return view('user.free_master_class.missiles');
})->name('user.free.master.class.missiles');

Route::get('/free_master_class/awards_of_assam', function () {
    return view('user.free_master_class.awards');
})->name('user.free.master.class.awards');

Route::get('/free_master_class/test_1', function () {
    return view('user.free_master_class.test_1');
})->name('user.free.master.class.test_1');

Route::get('/free_master_class/test_2', function () {
    return view('user.free_master_class.test_2');
})->name('user.free.master.class.test_2');


//SELF STUDY COURSE
Route::get('/self_studymaterial', function () {
    return view('user.self_study.material');
})->name('user.self_study.material');

Route::get('/self_studypaper', function () {
    return view('user.self_study.paper');
})->name('user.self_study.paper');

Route::get('/ias_booster_course(d)/plan', function () {
    return view('user.ias_booster_course(d).plan');
})->name('user.ias.booster.course(d).plan');


//mains_2023
Route::get('/mains_2023/material1', function () {
    return view('user.mains_2023.material(gs-1)');
})->name('user.mains.2023.material.(gs-1)');

Route::get('/mains_2023/material2', function () {
    return view('user.mains_2023.material(gs-2)');
})->name('user.mains.2023.material.(gs-2)');

Route::get('/mains_2023/material3', function () {
    return view('user.mains_2023.material(gs-3)');
})->name('user.mains.2023.material.(gs-3)');

Route::get('/mains_2023/material4', function () {
    return view('user.mains_2023.material(gs-4)');
})->name('user.mains.2023.material.(gs-4)');

Route::get('/mains_2023/material6', function () {
    return view('user.mains_2023.material(gs-6)');
})->name('user.mains.2023.material.(gs-6)');

Route::get('/mains_2023/toppers', function () {
    return view('user.mains_2023.topper_answer');
})->name('user.mains.2023.material.topper_answer');




Route::get('/mains_2023/paper', function () {
    return view('user.mains_2023.paper');
})->name('user.mains.2023.paper');

Route::get('/mains_2023/upaper', function () {
    return view('user.mains_2023.upaper');
})->name('user.mains.2023.upaper');

Route::get('/mains_2023/test/{course}', function ($course) {
    return view('user.mains_2023.testmaterial', compact('course'));
})->name('user.mains.2023.test');

Route::get('/mains_2023/plan', function () {
    return view('user.mains_2023.plan');
})->name('user.mains.2023.plan');

Route::get('/mains_2023/classppt', function () {
    return view('user.mains_2023.classppt');
})->name('user.mains.2023.classppt');


// dibrugarh seminar store
Route::get('/dibrugarh_seminar', function () {
    return view('digipedia.dibrugarh_seminar');
});


// Ghy seminar store
Route::get('/ghy_seminar', function () {
    return view('digipedia.ghy_seminar');
});

//self-study
Route::get('/economy', function () {
    return view('digipedia.self_study.economy');
});



Route::get('/free-master-class', [\App\Http\Controllers\FreeMasterClassController::class, 'index'])
    ->name('free.master.class.index')->middleware('auth');
Route::post('/user/free-master-class/store', [\App\Http\Controllers\FreeMasterClassController::class, 'store'])
    ->name('free.master.class.store')->middleware('auth');

//Online Quiz 
Route::get('/online/quizs/{course}', [\App\Http\Controllers\OnlineQuiz\OnlineQuizController::class, 'index'])
    ->name('online.quiz.index')
    ->middleware('auth');

Route::get('/online/quiz/questions/{id}/{course_name}', [\App\Http\Controllers\OnlineQuiz\OnlineQuizController::class, 'questions'])
    ->name('online.quiz.questions')
    ->middleware('auth');

//Online question
Route::post('/online/quiz/question/submit', [\App\Http\Controllers\OnlineQuiz\OnlineQuizController::class, 'submit'])
    ->name('online.quiz.question.submit')
    ->middleware('auth');

Route::get('/online/quiz/result/view/{id}', [\App\Http\Controllers\OnlineQuiz\OnlineQuizController::class, 'result'])
    ->name('online.quiz.result.view')
    ->middleware('auth');

Route::get('/apsc_exam_register', [\App\Http\Controllers\ApscExamController::class, 'index'])->name('apsc.exam.index');
Route::post('/apsc_exam_register/store', [\App\Http\Controllers\ApscExamController::class, 'store'])->name('apsc.exam.store');
Route::post(
    '/offline-exam-registration',
    [\App\Http\Controllers\OfflineExamRegistartionController::class, 'store']
)->name('offline.exam.register.store');




//test series quiz roll route
Route::get('/testseriesquizroll', [\App\Http\Controllers\TestSeriesQuizRoll\TestSeriesQuizRollController::class, 'index'])
    ->name('testseriesquizroll.index')
    ->middleware('auth');

Route::get('/testseriesquizroll/{set}', [\App\Http\Controllers\TestSeriesQuizRoll\TestSeriesQuizRollController::class, 'showSets'])
    ->name('testseriesquizroll.show')
    ->middleware('auth');

Route::get('/testseriesquizroll/type/{set}/{type}', [\App\Http\Controllers\TestSeriesQuizRoll\TestSeriesQuizRollController::class, 'showQuiz'])
    ->name('testseriesquizroll.showQuiz')
    ->middleware('auth');

Route::get('/testseriesquizroll/questions/{id}/{type}/{set}', [\App\Http\Controllers\TestSeriesQuizRoll\TestSeriesQuizRollController::class, 'questions'])
    ->name('testseriesquizroll.questions')
    ->middleware('auth');

//question
Route::post('/testseriesquizroll/question/submit', [\App\Http\Controllers\TestSeriesQuizRoll\TestSeriesQuizRollController::class, 'submit'])
    ->name('testseriesquizroll.question.submit')
    ->middleware('auth');

Route::get('/testseriesquizroll/result/view/{id}', [\App\Http\Controllers\TestSeriesQuizRoll\TestSeriesQuizRollController::class, 'result'])
    ->name('testseriesquizroll.result.view')
    ->middleware('auth');


//user mentor
Route::get('/user_mentor', [\App\Http\Controllers\PersonalMentorController::class, 'index'])
    ->name('user_mentor.index')
    ->middleware('auth');

Route::get('/slot_table', [\App\Http\Controllers\PersonalMentorController::class, 'slots'])
    ->name('user_mentor.slots')
    ->middleware('auth');

Route::post('/user_mentor/store', [\App\Http\Controllers\PersonalMentorController::class, 'store'])
    ->name('user_mentor.store')
    ->middleware('auth');

Route::delete('/user_mentor/delete/{id}', [\App\Http\Controllers\PersonalMentorController::class, 'destroy'])
    ->name('user_mentor.destroy')
    ->middleware('auth');

Route::get('/user/course/view/{course}/{type}', function ($course, $type) {
    $sub_topics = [];
    if ($type === 'UPSC') {
        $course = Course::find($course);
    } else   if ($type === 'APSC') {
        $course = ApscCourses::find($course);
        $sub_topics = ClassVideo::where('course', $course->title)->where('type', '!=', 'NULL')->get()->unique('type')->pluck('type');
    } else   if ($type === 'RECORDED') {
        $course = Recorded::find($course);
    } else if ($type === 'STUDY_MATERIAL') {
        $course = StudyMaterial::find($course);
    }
    return view('user.courseView', compact('course', 'type', 'sub_topics'));
})->name('user.course.view')
    ->middleware('auth');


Route::get('/free-trial-course', function () {
    return view('free_trial_course');
})->name('free.trial.course');
Route::post('/free-trial-course/store', [\App\Http\Controllers\FreeTrialCourseController::class, 'store'])
    ->name('free.trial.course.store');


Route::post('/interviewPreparation/store', [\App\Http\Controllers\InterviewPreparationController::class, 'store'])
    ->name('interviewPreparation.store')->middleware('auth');


Route::post('/acs-scholarship-mentoring/store', [\App\Http\Controllers\AcsScholarshipAndMentoringController::class, 'store'])
    ->name('acs.scholarship.mentoring.store');



/**
 * HDFC Payment Gateway Routes
 */

// UPSC
Route::get('/hdfc-payment/complete/{order_id}', [\App\Http\Controllers\HDFCPaymentGateway\UPSCPaymentController::class, 'complete_pending_order'])
    ->name('hdfc.payment.complete');
Route::post('/hdfc-payment/response', [\App\Http\Controllers\HDFCPaymentGateway\UPSCPaymentController::class, 'response'])
    ->name('hdfc.payment.response');
Route::get('/hdfc-payment/{course}', [\App\Http\Controllers\HDFCPaymentGateway\UPSCPaymentController::class, 'initiate'])
    ->name('hdfc.payment.initiate');


// APSC
Route::get('/hdfc-payment/apsc/complete/{order_id}', [\App\Http\Controllers\HDFCPaymentGateway\APSCPaymentController::class, 'complete_pending_order'])
    ->name('hdfc.payment.apsc.complete');
Route::post('/hdfc-payment/apsc/response', [\App\Http\Controllers\HDFCPaymentGateway\APSCPaymentController::class, 'response'])
    ->name('hdfc.payment.apsc.response');
Route::get('/hdfc-payment/apsc/{course}', [\App\Http\Controllers\HDFCPaymentGateway\APSCPaymentController::class, 'initiate'])
    ->name('hdfc.payment.apsc.initiate');


// Recorded
Route::get('/hdfc-payment/recorded/complete/{order_id}', [\App\Http\Controllers\HDFCPaymentGateway\RecordedPaymentController::class, 'complete_pending_order'])
    ->name('hdfc.payment.recorded.complete');
Route::post('/hdfc-payment/recorded/response', [\App\Http\Controllers\HDFCPaymentGateway\RecordedPaymentController::class, 'response'])
    ->name('hdfc.payment.recorded.response');
Route::get('/hdfc-payment/recorded/{course}', [\App\Http\Controllers\HDFCPaymentGateway\RecordedPaymentController::class, 'initiate'])
    ->name('hdfc.payment.recorded.initiate');


// Study Material
Route::get('/hdfc-payment/study-material/complete/{order_id}', [\App\Http\Controllers\HDFCPaymentGateway\StudyMaterialPaymentController::class, 'complete_pending_order'])
    ->name('hdfc.payment.study-material.complete');
Route::post('/hdfc-payment/study-material/response', [\App\Http\Controllers\HDFCPaymentGateway\StudyMaterialPaymentController::class, 'response'])
    ->name('hdfc.payment.study-material.response');
Route::get('/hdfc-payment/study-material/{course}', [\App\Http\Controllers\HDFCPaymentGateway\StudyMaterialPaymentController::class, 'initiate'])
    ->name('hdfc.payment.study-material.initiate');


Route::get('/quiz/outside/{course}', [\App\Http\Controllers\Quiz\QuizController::class, 'index'])
    ->name('quiz.outside.course.index');

Route::get('/quiz/outside/questions/{id}/{course_name}', [\App\Http\Controllers\Quiz\QuizController::class, 'outsideCourseQuestions'])
    ->name('quiz.outside.course.questions');

Route::post('/quiz/outside/submit', [\App\Http\Controllers\Quiz\QuizController::class, 'submitOutsideCourse'])
    ->name('quiz.outside.course.submit');

Route::post('/quiz/outside/modal/submit', [\App\Http\Controllers\Quiz\QuizController::class, 'modalSubmit'])
    ->name('quiz.outside.course.modal.submit');
