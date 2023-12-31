 <div class="lernen_banner bg-courses">
     <div class="container">
         <div class="row">
             <div class="lernen_banner_title">
                 <h2 class="text-white">{{ $course->title }}</h2>
             </div>
         </div>
     </div>
 </div>
 <div class="container-fluid mt-5">
     <!-- .row -->
     <div>
         <div class="row ml-2 mr-2 ">
             @if ($course->title != 'APSC ADVANCED CSAT (GS II)' &&
             $course->title != 'APSC STUDY MATERIAL' &&
             $course->title != 'APSC 2023TEST SERIES' &&
             $course->title != 'HISTORY OF ASSAM' &&
             $course->title != 'APSC 2021 SUCCESS COURSE' &&
             $course->title != 'APSC CURRENT AFFAIRS' &&
             $course->title != 'SCIENCE & TECHNOLOGY' &&
             $course->title != 'ECOLOGY & ENVIRONMENT' &&
             $course->title != 'INDIAN HISTORY, ART & CULTURE' &&
             $course->title != 'GEOGRAPHY' &&
             $course->title != 'INDIAN ECONOMY' &&
             $course->title != 'SCIENCE & TECHNOLOGY(UPSC)' &&
             $course->title != 'ECOLOGY & ENVIRONMENT(UPSC)' &&
             $course->title != 'INDIAN HISTORY, ART & CULTURE(UPSC)' &&
             $course->title != 'GEOGRAPHY(UPSC)' &&
             $course->title != 'INDIAN ECONOMY(UPSC)' &&
             $course->title != 'CSAT & CURRENT AFFAIRS' &&
             $course->title != 'APSC 2023 MAINS PREPARATION' &&
             $course->title != 'DAILY MAINS TEST' &&
             $course->title != 'DAILY MAINS TEST 2023' &&
             $course->title != 'WRITE TO WIN' &&
             $course->title != 'WRITE TO WIN .' )
             <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">
                 <div class="single-features-light text-center">
                     <div>
                         <i class="base-color fas fa-book fa-3x"></i>
                         <h4>UPSC TEST SERIES</h4>
                         <a href="{{ route('testseriesquiz.index', [$course->title, 'UPSC']) }}"
                             class=" btn color-two button text-white">VIEW</a>
                     </div>
                 </div>
             </div>

             @endif
             @if ($course->title != 'APSC CURRENT AFFAIRS'&&
             $course->title != 'HISTORY OF ASSAM' &&
             $course->title != 'SCIENCE & TECHNOLOGY' &&
             $course->title != 'ECOLOGY & ENVIRONMENT' &&
             $course->title != 'INDIAN HISTORY, ART & CULTURE' &&
             $course->title != 'GEOGRAPHY' &&
             $course->title != 'INDIAN ECONOMY' &&
             $course->title != 'APSC CRASH COURSE' &&
             $course->title != 'SCIENCE & TECHNOLOGY(UPSC)' &&
             $course->title != 'ECOLOGY & ENVIRONMENT(UPSC)' &&
             $course->title != 'INDIAN HISTORY, ART & CULTURE(UPSC)' &&
             $course->title != 'GEOGRAPHY(UPSC)' &&
             $course->title != 'INDIAN ECONOMY(UPSC)' &&
             $course->title != 'CSAT & CURRENT AFFAIRS' &&
             $course->title != 'APSC 2023 MAINS PREPARATION' &&
             $course->title != 'DAILY MAINS TEST' &&
             $course->title != 'DAILY MAINS TEST 2023' &&
             $course->title != 'WRITE TO WIN' &&
             $course->title != 'WRITE TO WIN .')
             <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">
                 <div class="single-features-light text-center">
                     <div>
                         <i class="base-color fas fa-book fa-3x"></i>
                         <h4>APSC TEST 2023</h4>
                         <a href="{{ route('online.quiz.index', $course->title) }}"
                             class=" btn color-two button text-white">VIEW</a>
                     </div>
                 </div>
             </div>
             @endif



             @if ($course->title == 'APSC CURRENT AFFAIRS')
             <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">
                 <div class="single-features-light text-center">
                     <div>
                         <i class="base-color fas fa-book fa-3x"></i>
                         <h4>ASSAM CURRENT AFFAIRS</h4>
                         <a href="{{ route('user.mock.test.material') }}"
                             class=" btn color-two button text-white">View</a>
                     </div>
                 </div>
             </div>


             <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">
                 <div class="single-features-light text-center">
                     <div>
                         <i class="base-color fas fa-book fa-3x"></i>
                         <h4>ASSAM TRIBUNE</h4>
                         <a href="{{ route('apsc_all.pdfs') }}" class=" btn color-two button text-white">View</a>
                     </div>
                 </div>
             </div>

             @endif




             @if ($course->title == 'APSC ADVANCED CSAT (GS II)')
             <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">
                 <div class="single-features-light text-center">
                     <div>
                         <i class="base-color fas fa-book fa-3x"></i>
                         <h4>CSAT Test</h4>
                         <a href="{{ route('testseriesquiz.index', [$course->title ,"APSC"]) }}"
                             class=" btn color-two button text-white">VIEW</a>
                     </div>
                 </div>
             </div>
             <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">
                 <div class="single-features-light text-center">
                     <div>
                         <i class="base-color fas fa-book fa-3x"></i>
                         <h4>RECORDED CLASSES</h4>
                         <a href="{{ route('user.class.video.index', 'Advanced CSAT (GS II)') }}"
                             class=" btn color-two button text-white">VIEW</a>
                     </div>
                 </div>
             </div>
             <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">
                 <div class="single-features-light text-center">
                     <div>
                         <i class="base-color fas fa-book fa-3x"></i>
                         <h4>ASSAM CURRENT AFFAIRS</h4>
                         <a href="{{ route('user.mock.test.material') }}"
                             class=" btn color-two button text-white">View</a>
                     </div>
                 </div>
             </div>
             <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">
                 <div class="single-features-light text-center">
                     <div>
                         <i class="base-color fas fa-book fa-3x"></i>
                         <h4>CLASS PPTS</h4>
                         <a href="{{ route('user.advanced.csat.gs2.material') }}"
                             class=" btn color-two button text-white">VIEW</a>
                     </div>
                 </div>
             </div>
             @endif

             @if ($course->title == 'study')
             <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">
                 <div class="single-features-light text-center">
                     <div>
                         <i class="base-color fas fa-book fa-3x"></i>
                         <h4>CSAT Test</h4>
                         <a href="{{ route('testseriesquiz.index', [$course->title ,"APSC"]) }}"
                             class=" btn color-two button text-white">VIEW</a>
                     </div>
                 </div>
             </div>
             <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">
                 <div class="single-features-light text-center">
                     <div>
                         <i class="base-color fas fa-book fa-3x"></i>
                         <h4>RECORDED CLASSES</h4>
                         <a href="{{ route('user.class.video.index', 'study') }}"
                             class=" btn color-two button text-white">VIEW</a>
                     </div>
                 </div>
             </div>
             <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">
                 <div class="single-features-light text-center">
                     <div>
                         <i class="base-color fas fa-book fa-3x"></i>
                         <h4>ASSAM CURRENT AFFAIRS</h4>
                         <a href="{{ route('user.mock.test.material') }}"
                             class=" btn color-two button text-white">View</a>
                     </div>
                 </div>
             </div>
             <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">
                 <div class="single-features-light text-center">
                     <div>
                         <i class="base-color fas fa-book fa-3x"></i>
                         <h4>CLASS PPTS</h4>
                         <a href="{{ route('user.advanced.csat.gs2.material') }}"
                             class=" btn color-two button text-white">VIEW</a>
                     </div>
                 </div>
             </div>
             @endif


             @if ($course->title == 'INDIAN ECONOMY')

             <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">

                 <div class="single-features-light text-center">
                     <div>
                         <i class="base-color fas fa-book fa-3x"></i>
                         <h4>STUDY PLAN</h4>
                         <a href="{{ route('user.apsc.indian.economy.recorded.plan') }}"
                             class=" btn color-two button text-white">DOWNLOAD</a>
                     </div>
                 </div>
             </div>
             <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">

                 <div class="single-features-light text-center">
                     <div>
                         <i class="base-color fas fa-book fa-3x"></i>
                         <h4>ACS MATERIALS</h4>
                         <a href="{{ route('user.apsc.indian.economy.recorded.material') }}"
                             class=" btn color-two button text-white">VIEW</a>
                     </div>
                 </div>
             </div>

             <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">

                 <div class="single-features-light text-center">
                     <div>
                         <i class="base-color fas fa-book fa-3x"></i>
                         <h4>PREVIOUS QUESTION PAPER</h4>
                         <a href="{{ route('user.apsc.indian.economy.recorded.paper') }}"
                             class=" btn color-two button text-white">VIEW</a>
                     </div>
                 </div>
             </div>
             <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">
                 <div class="single-features-light text-center">
                     <div>
                         <i class="base-color fas fa-book fa-3x"></i>
                         <h4>PPTS</h4>
                         <a href="{{ route('user.apsc.indian.economy.recorded.classppt') }}"
                             class=" btn color-two button text-white">View</a>
                     </div>
                 </div>
             </div>

             <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">
                 <div class="single-features-light text-center">
                     <div>
                         <i class="base-color fas fa-book fa-3x"></i>
                         <h4>RECORDED CLASSES</h4>
                         <a href="{{ route('user.new.video', $course->title) }}"
                             class=" btn color-two button text-white">VIEW</a>
                     </div>
                 </div>
             </div>
             @endif

             @if ($course->title == 'DAILY MAINS TEST')
             <div class="col-xs-12 col-sm-12 col-md-4 col-lg-6 mt-2">
                 <div class="single-features-light text-center">
                     <!-- single features -->
                     <div>
                         <i class="base-color fas fa-clipboard fa-3x"></i>
                         <h4>ANSWER WRITING & EVALUATION REPORT</h4>
                         <a href="{{ route('assignments.index') }}" class="btn color-two button text-white">View</a>
                     </div>
                 </div>
             </div>
             <div class="col-xs-12 col-sm-12 col-md-4 col-lg-6 mt-3">
                 <div class="single-features-light text-center">

                     <div>
                         <i class="base-color fas fa-book fa-3x"></i>
                         <h4>TOPPERS ANSWER</h4>
                         <a href="{{ route('user.mains.2023.material.topper_answer') }}"
                             class=" btn color-two button text-white">VIEW</a>
                     </div>
                 </div>

             </div>
             <div class="col-xs-12 col-sm-12 col-md-4 col-lg-6 mt-3">

                 <div class="single-features-light text-center">

                     <div>
                         <i class="base-color fas fa-book fa-3x"></i>
                         <h4>UPSC MAINS PYQ</h4>
                         <a href="{{ route('user.mains.2023.upaper') }}"
                             class=" btn color-two button text-white">VIEW</a>
                     </div>
                 </div>

             </div>


             <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">

                 <div class="single-features-light text-center">

                     <div>
                         <i class="base-color fas fa-book fa-3x"></i>
                         <h4>APSC MAINS PYQ</h4>
                         <a href="{{ route('user.mains.2023.paper') }}"
                             class=" btn color-two button text-white">VIEW</a>
                     </div>
                 </div>

             </div>
             @endif

             @if ($course->title == 'WRITE TO WIN')
             <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-2">
                 <div class="single-features-light text-center">
                     <!-- single features -->
                     <div>
                         <i class="base-color fas fa-clipboard fa-3x"></i>
                         <h4>ANSWER WRITING & EVALUATION REPORT</h4>
                         <a href="{{ route('assignments.index') }}" class="btn color-two button text-white">View</a>
                     </div>
                 </div>
             </div>
             <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">
                 <div class="single-features-light text-center">

                     <div>
                         <i class="base-color fas fa-book fa-3x"></i>
                         <h4>TOPPERS NOTES</h4>
                         <a href="{{ route('user.mains.2023.material.topper_answer') }}"
                             class=" btn color-two button text-white">VIEW</a>
                     </div>
                 </div>

             </div>

             <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">

                 <div class="single-features-light text-center">

                     <div>
                         <i class="base-color fas fa-book fa-3x"></i>
                         <h4>MAINS MATERIALS</h4>
                         <h4>GS-I</h4>
                         <a href="{{ route('user.mains.2023.material.(gs-1)') }}"
                             class=" btn color-two button text-white">VIEW</a>
                     </div>
                 </div>

             </div>

             <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">

                 <div class="single-features-light text-center">

                     <div>
                         <i class="base-color fas fa-book fa-3x"></i>
                         <h4>MAINS MATERIALS</h4>
                         <h4>GS-II</h4>
                         <a href="{{ route('user.mains.2023.material.(gs-2)') }}"
                             class=" btn color-two button text-white">VIEW</a>
                     </div>
                 </div>

             </div>

             <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">

                 <div class="single-features-light text-center">

                     <div>
                         <i class="base-color fas fa-book fa-3x"></i>
                         <h4>MAINS MATERIALS</h4>
                         <h4>GS-III</h4>
                         <a href="{{ route('user.mains.2023.material.(gs-3)') }}"
                             class=" btn color-two button text-white">VIEW</a>
                     </div>
                 </div>

             </div>

             <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">

                 <div class="single-features-light text-center">

                     <div>
                         <i class="base-color fas fa-book fa-3x"></i>
                         <h4>MAINS MATERIALS</h4>
                         <h4>GS-IV</h4>
                         <a href="{{ route('user.mains.2023.material.(gs-4)') }}"
                             class=" btn color-two button text-white">VIEW</a>
                     </div>
                 </div>

             </div>

             <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">

                 <div class="single-features-light text-center">

                     <div>
                         <i class="base-color fas fa-book fa-3x"></i>
                         <h4>UPSC MAINS PYQ</h4>
                         <a href="{{ route('user.mains.2023.upaper') }}"
                             class=" btn color-two button text-white">VIEW</a>
                     </div>
                 </div>

             </div>

             <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">
                 <div class="single-features-light text-center">
                     <!-- single features -->
                     <div>
                         <i class="base-color fas fa-book fa-3x"></i>
                         <h4>VIDEO ONLINE CLASS</h4>
                         <a href="{{ route('user.new.video', $course->title) }}"
                             class=" btn color-two button text-white">View</a>
                     </div>
                 </div>
                 <!-- end single features -->
             </div>
             @endif

             @if ($course->title == 'MAINS PREPARATION')
             <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-2">
                 <div class="single-features-light text-center">
                     <!-- single features -->
                     <div>
                         <i class="base-color fas fa-clipboard fa-3x"></i>
                         <h4>ANSWER WRITING & EVALUATION REPORT</h4>
                         <a href="{{ route('assignments.index') }}" class="btn color-two button text-white">View</a>
                     </div>
                 </div>
             </div>
             <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">
                 <div class="single-features-light text-center">

                     <div>
                         <i class="base-color fas fa-book fa-3x"></i>
                         <h4>TOPPERS NOTES</h4>
                         <a href="{{ route('user.mains.2023.material.topper_answer') }}"
                             class=" btn color-two button text-white">VIEW</a>
                     </div>
                 </div>

             </div>

             <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">

                 <div class="single-features-light text-center">

                     <div>
                         <i class="base-color fas fa-book fa-3x"></i>
                         <h4>MAINS MATERIALS</h4>
                         <h4>GS-I</h4>
                         <a href="{{ route('user.mains.2023.material.(gs-1)') }}"
                             class=" btn color-two button text-white">VIEW</a>
                     </div>
                 </div>

             </div>

             <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">

                 <div class="single-features-light text-center">

                     <div>
                         <i class="base-color fas fa-book fa-3x"></i>
                         <h4>MAINS MATERIALS</h4>
                         <h4>GS-II</h4>
                         <a href="{{ route('user.mains.2023.material.(gs-2)') }}"
                             class=" btn color-two button text-white">VIEW</a>
                     </div>
                 </div>

             </div>

             <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">

                 <div class="single-features-light text-center">

                     <div>
                         <i class="base-color fas fa-book fa-3x"></i>
                         <h4>MAINS MATERIALS</h4>
                         <h4>GS-III</h4>
                         <a href="{{ route('user.mains.2023.material.(gs-3)') }}"
                             class=" btn color-two button text-white">VIEW</a>
                     </div>
                 </div>

             </div>

             <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">

                 <div class="single-features-light text-center">

                     <div>
                         <i class="base-color fas fa-book fa-3x"></i>
                         <h4>MAINS MATERIALS</h4>
                         <h4>GS-IV</h4>
                         <a href="{{ route('user.mains.2023.material.(gs-4)') }}"
                             class=" btn color-two button text-white">VIEW</a>
                     </div>
                 </div>
             </div>
             <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">
                 <div class="single-features-light text-center">
                     <div>
                         <i class="base-color fas fa-book fa-3x"></i>
                         <h4>UPSC MAINS PYQ</h4>
                         <a href="{{ route('user.mains.2023.upaper') }}"
                             class=" btn color-two button text-white">VIEW</a>
                     </div>
                 </div>
             </div>
             @endif

             @if ($course->title == 'WRITE TO WIN .')
             <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-2">
                 <div class="single-features-light text-center">
                     <!-- single features -->
                     <div>
                         <i class="base-color fas fa-clipboard fa-3x"></i>
                         <h4>ANSWER WRITING & EVALUATION REPORT</h4>
                         <a href="{{ route('assignments.index') }}" class="btn color-two button text-white">View</a>
                     </div>
                 </div>
             </div>
             <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">
                 <div class="single-features-light text-center">

                     <div>
                         <i class="base-color fas fa-book fa-3x"></i>
                         <h4>TOPPERS NOTES</h4>
                         <a href="{{ route('user.mains.2023.material.topper_answer') }}"
                             class=" btn color-two button text-white">VIEW</a>
                     </div>
                 </div>

             </div>

             <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">

                 <div class="single-features-light text-center">

                     <div>
                         <i class="base-color fas fa-book fa-3x"></i>
                         <h4>MAINS MATERIALS</h4>
                         <h4>GS-I</h4>
                         <a href="{{ route('user.mains.2023.material.(gs-1)') }}"
                             class=" btn color-two button text-white">VIEW</a>
                     </div>
                 </div>

             </div>

             <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">

                 <div class="single-features-light text-center">

                     <div>
                         <i class="base-color fas fa-book fa-3x"></i>
                         <h4>MAINS MATERIALS</h4>
                         <h4>GS-II</h4>
                         <a href="{{ route('user.mains.2023.material.(gs-2)') }}"
                             class=" btn color-two button text-white">VIEW</a>
                     </div>
                 </div>

             </div>

             <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">

                 <div class="single-features-light text-center">

                     <div>
                         <i class="base-color fas fa-book fa-3x"></i>
                         <h4>MAINS MATERIALS</h4>
                         <h4>GS-III</h4>
                         <a href="{{ route('user.mains.2023.material.(gs-3)') }}"
                             class=" btn color-two button text-white">VIEW</a>
                     </div>
                 </div>

             </div>

             <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">

                 <div class="single-features-light text-center">

                     <div>
                         <i class="base-color fas fa-book fa-3x"></i>
                         <h4>MAINS MATERIALS</h4>
                         <h4>GS-IV</h4>
                         <a href="{{ route('user.mains.2023.material.(gs-4)') }}"
                             class=" btn color-two button text-white">VIEW</a>
                     </div>
                 </div>
             </div>
             <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">
                 <div class="single-features-light text-center">
                     <div>
                         <i class="base-color fas fa-book fa-3x"></i>
                         <h4>MAINS MATERIALS</h4>
                         <h4>GS-V</h4>
                         <a href="{{ route('user.mains.2023.material.(gs-6)') }}"
                             class=" btn color-two button text-white">VIEW</a>
                     </div>
                 </div>
             </div>
             <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">
                 <div class="single-features-light text-center">
                     <div>
                         <i class="base-color fas fa-book fa-3x"></i>
                         <h4>UPSC MAINS PYQ</h4>
                         <a href="{{ route('user.mains.2023.upaper') }}"
                             class=" btn color-two button text-white">VIEW</a>
                     </div>
                 </div>
             </div>
             <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">
                 <div class="single-features-light text-center">
                     <div>
                         <i class="base-color fas fa-book fa-3x"></i>
                         <h4>APSC MAINS PYQ</h4>
                         <a href="{{ route('user.mains.2023.paper') }}"
                             class=" btn color-two button text-white">VIEW</a>
                     </div>
                 </div>
             </div>
             <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">
                 <div class="single-features-light text-center">
                     <!-- single features -->
                     <div>
                         <i class="base-color fas fa-book fa-3x"></i>
                         <h4>VIDEO ONLINE CLASS</h4>
                         <a href="{{ route('user.new.video', $course->title) }}"
                             class=" btn color-two button text-white">View</a>
                     </div>
                 </div>
                 <!-- end single features -->
             </div>

             @endif

             @if ($course->title == 'DAILY MAINS TEST 2023')
             <div class="col-xs-12 col-sm-12 col-md-4 col-lg-6 mt-2">
                 <div class="single-features-light text-center">
                     <!-- single features -->
                     <div>
                         <i class="base-color fas fa-clipboard fa-3x"></i>
                         <h4>ANSWER WRITING & EVALUATION REPORT</h4>
                         <a href="{{ route('assignments.index') }}" class="btn color-two button text-white">View</a>
                     </div>
                 </div>
             </div>
             <div class="col-xs-12 col-sm-12 col-md-4 col-lg-6 mt-3">
                 <div class="single-features-light text-center">

                     <div>
                         <i class="base-color fas fa-book fa-3x"></i>
                         <h4>TOPPERS ANSWER</h4>
                         <a href="{{ route('user.mains.2023.material.topper_answer') }}"
                             class=" btn color-two button text-white">VIEW</a>
                     </div>
                 </div>

             </div>
             <div class="col-xs-12 col-sm-12 col-md-4 col-lg-6 mt-3">

                 <div class="single-features-light text-center">

                     <div>
                         <i class="base-color fas fa-book fa-3x"></i>
                         <h4>UPSC MAINS PYQ</h4>
                         <a href="{{ route('user.mains.2023.upaper') }}"
                             class=" btn color-two button text-white">VIEW</a>
                     </div>
                 </div>

             </div>


             <div class="col-xs-12 col-sm-12 col-md-4 col-lg-6 mt-3">

                 <div class="single-features-light text-center">

                     <div>
                         <i class="base-color fas fa-book fa-3x"></i>
                         <h4>APSC MAINS PYQ</h4>
                         <a href="{{ route('user.mains.2023.paper') }}"
                             class=" btn color-two button text-white">VIEW</a>
                     </div>
                 </div>

             </div>


             @endif






             @if ($course->title == 'APSC 2023TEST SERIES')
             <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">
                 <div class="single-features-light text-center">
                     <div>
                         <i class="base-color fas fa-book fa-3x"></i>
                         <h4>APSC FULL TEST 2023 </h4>
                         <a href="{{ route('testseriesquiz.index', [$course->title ,"APSC"]) }}"
                             class=" btn color-two button text-white">VIEW</a>
                     </div>
                 </div>
             </div>

             <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">
                 <!-- 2 -->
                 <div class="single-features-light text-center">
                     <!-- single features -->
                     <div>
                         <i class="base-color fas fa-book fa-3x"></i>
                         <h4>ACS MATERIALS</h4>
                         <a href="{{ route('user.apsc.2023.test.series.material') }}"
                             class=" btn color-two button text-white">VIEW</a>
                     </div>
                 </div>
                 <!-- end single features -->
             </div>
             <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">
                 <div class="single-features-light text-center">
                     <!-- single features -->
                     <div>
                         <i class="base-color fas fa-book fa-3x"></i>
                         <h4>ASSAM TRIBUNE</h4>
                         <a href="{{ route('apsc_all.pdfs') }}" class=" btn color-two button text-white">View</a>
                     </div>
                 </div>
             </div>
             <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">
                 <div class="single-features-light text-center">
                     <div>
                         <i class="base-color fas fa-book fa-3x"></i>
                         <h4>ASSAM CURRENT AFFAIRS</h4>
                         <a href="{{ route('user.mock.test.material') }}"
                             class=" btn color-two button text-white">View</a>
                     </div>
                 </div>
             </div>
             <!-- APSC Prelims (PYQ) -->
             <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">
                 <div class="single-features-light text-center">
                     <!-- single features -->
                     <div>
                         <i class="base-color fas fa-book fa-3x"></i>
                         <h4>APSC PRELIMS (PYQ)</h4>
                         <a href="{{ route('user.apsc.prelims.pyq') }}"
                             class=" btn color-two button text-white">View</a>
                     </div>
                 </div>
             </div>

             <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">
                 <div class="single-features-light text-center">
                     <div>
                         <i class="base-color fab fa-leanpub fa-3x"></i>
                         <h4>100 important current affairs</h4>
                         <a href="{{ asset('pdf/ACS Prelims Current Affairs 2022 (100).pdf') }}" target="_blank"
                             class="btn color-two button text-white">VIEW</a>
                     </div>
                 </div>
             </div>
             <!-- REPORTS AND INDICES 2022 COMPILATION -->
             <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">
                 <div class="single-features-light text-center">
                     <div>
                         <i class="base-color fab fa-leanpub fa-3x"></i>
                         <h4>REPORTS AND INDICES 2022 COMPILATION</h4>
                         <a href="{{ asset('pdf/ACS Indices Reports Combilaions.pdf') }}" target="_blank"
                             class="btn color-two button text-white">VIEW</a>
                     </div>
                 </div>
             </div>
             <!-- INTERNATIONAL ORGANIZATIONS/INSTITUTIONS/GROUPINGS IN NEWS -->
             <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">
                 <div class="single-features-light text-center">
                     <div>
                         <i class="base-color fab fa-leanpub fa-3x"></i>
                         <h4>INTERNATIONAL ORGANIZATIONS/ INSTITUTIONS/ GROUPINGS IN NEWS</h4>
                         <a href="{{ asset('pdf/ACSInternationalOrganizationCombilaions.pdf') }}" target="_blank"
                             class="btn color-two button text-white">VIEW</a>
                     </div>
                 </div>
             </div>
             <!-- current affair question compilation -->
             <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">
                 <div class="single-features-light text-center">
                     <div>
                         <i class="base-color fab fa-leanpub fa-3x"></i>
                         <h4>ACS CURRENT AFFAIRS QUESTIONS COMPILATION</h4>
                         <a href="{{ asset('pdf/ACSPrelimsCurrentAffairsQuestionsCompilation22.pdf') }}" target="_blank"
                             class="btn color-two button text-white">VIEW</a>
                     </div>
                 </div>
             </div>
             @else
             @if ($course->title != 'APSC ADVANCED CSAT (GS II)' && $course->title != 'APSC ADVANCED CSAT (GS II)')

             @endif
             @if ($course->title == 'IAS EXAM 2021')
             <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3">
                 <!-- 3 -->
                 <div class="single-features-light text-center">
                     <!-- single features -->
                     <div>
                         <i class="base-color fab fa-leanpub fa-3x"></i>
                         <h4>TEST CENTER</h4>
                         <a href="{{ route('user.tests.index', $course->title) }}"
                             class="btn color-two button text-white">ENTER</a>
                     </div>
                 </div>
                 <!-- end single features -->
             </div>
             <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3">
                 <!-- 3 -->
                 <div class="single-features-light text-center">
                     <!-- single features -->
                     <div>
                         <i class="base-color fab fa-leanpub fa-3x"></i>
                         <h4>RESULTS</h4>
                         <a href="{{ route('user.result.index', $course->title) }}"
                             class="btn color-two button text-white">VIEW</a>
                     </div>
                 </div>
                 <!-- end single features -->
             </div>
             <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3">
                 <!-- 3 -->
                 <div class="single-features-light text-center">
                     <!-- single features -->
                     <div>
                         <i class="base-color fab fa-leanpub fa-3x"></i>
                         <h4>ANSWER CENTER</h4>
                         <a href="{{ route('user.answer.resultIndex', $course->title) }}"
                             class="btn color-two button text-white">VIEW</a>
                     </div>
                 </div>
                 <!-- end single features -->
             </div>

             @elseif($course->title == 'APSC 2021 SUCCESS COURSE')
             <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">
                 <!-- 2 -->
                 <div class="single-features-light text-center">
                     <!-- single features -->
                     <div>
                         <i class="base-color fas fa-book fa-3x"></i>
                         <h4>STUDY PLAN</h4>
                         <a href="{{ route('user.apsc.sucess.(b-2).plan') }}"
                             class=" btn color-two button text-white">DOWNLOAD</a>
                     </div>
                 </div>
                 <!-- end single features -->
             </div>
             <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">
                 <!-- 2 -->
                 <div class="single-features-light text-center">
                     <!-- single features -->
                     <div>
                         <i class="base-color fas fa-book fa-3x"></i>
                         <h4>ACS MATERIALS</h4>
                         <a href="{{ route('user.apsc.sucess.material') }}"
                             class=" btn color-two button text-white">VIEW</a>
                     </div>
                 </div>
                 <!-- end single features -->
             </div>
             <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">
                 <div class="single-features-light text-center">
                     <div>
                         <i class="base-color fas fa-book fa-3x"></i>
                         <h4>ASSAM CURRENT AFFAIRS</h4>
                         <a href="{{ route('user.mock.test.material') }}"
                             class=" btn color-two button text-white">View</a>
                     </div>
                 </div>
             </div>
             <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">
                 <!-- 1 -->
                 <div class="single-features-light text-center">
                     <!-- single features -->
                     <div>
                         <!-- uses solid style -->
                         <i class="base-color fas fa-book fa-3x"></i>
                         <h4>PREVIOUS QUESTION PAPER</h4>
                         <a href="{{ route('user.apsc.sucess.paper') }}"
                             class=" btn color-two button text-white">VIEW</a>
                     </div>
                 </div>
                 <!-- end single features -->
             </div>
             <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">
                 <!-- 2 -->
                 <div class="single-features-light text-center">
                     <!-- single features -->
                     <div>
                         <i class="base-color fas fa-book fa-3x"></i>
                         <h4>TEST SERIES</h4>
                         <a href="{{ route('user.apsc.sucess.test', $course->title) }}"
                             class=" btn color-two button text-white">VIEW</a>
                     </div>
                 </div>
             </div>
             <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">
                 <div class="single-features-light text-center">
                     <!-- single features -->
                     <div>
                         <i class="base-color fas fa-book fa-3x"></i>
                         <h4>RECORDED CLASSES (CURRENT AFFAIRS)</h4>
                         <a href="{{ route('user.class.video.index', $course->title) }}"
                             class=" btn color-two button text-white">View</a>
                     </div>
                 </div>
                 <!-- end single features -->
             </div>

             <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">
                 <div class="single-features-light text-center">
                     <!-- single features -->
                     <div>
                         <i class="base-color fas fa-book fa-3x"></i>
                         <h4>PPTS</h4>
                         <a href="{{ route('user.apsc.sucess.ppt') }}" class=" btn color-two button text-white">View</a>
                     </div>
                 </div>
             </div>
             <!--  Prelims (PYQ) -->
             <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">
                 <div class="single-features-light text-center">
                     <!-- single features -->
                     <div>
                         <i class="base-color fas fa-book fa-3x"></i>
                         <h4>APSC PRELIMS (PYQ)</h4>
                         <a href="{{ route('user.apsc.prelims.pyq') }}"
                             class=" btn color-two button text-white">View</a>
                     </div>
                 </div>
             </div>
             @elseif($course->title == 'OFFLINE BATCH 2022 (Batch-2)')
             <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">
                 <!-- 2 -->
                 <div class="single-features-light text-center">
                     <!-- single features -->
                     <div>
                         <i class="base-color fas fa-book fa-3x"></i>
                         <h4>STUDY PLAN</h4>
                         <a href="{{ route('user.offline.batch.2022.(batch-2).plan') }}"
                             class=" btn color-two button text-white">DOWNLOAD</a>
                     </div>
                 </div>
                 <!-- end single features -->
             </div>
             <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">
                 <!-- 2 -->
                 <div class="single-features-light text-center">
                     <!-- single features -->
                     <div>
                         <i class="base-color fas fa-book fa-3x"></i>
                         <h4>ACS MATERIALS</h4>
                         <a href="{{ route('user.offline.batch.2022.(batch-2).material') }}"
                             class=" btn color-two button text-white">VIEW</a>
                     </div>
                 </div>
                 <!-- end single features -->
             </div>
             <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">
                 <div class="single-features-light text-center">
                     <div>
                         <i class="base-color fas fa-book fa-3x"></i>
                         <h4>ASSAM CURRENT AFFAIRS</h4>
                         <a href="{{ route('user.mock.test.material') }}"
                             class=" btn color-two button text-white">View</a>
                     </div>
                 </div>
             </div>
             <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">
                 <!-- 1 -->
                 <div class="single-features-light text-center">
                     <!-- single features -->
                     <div>
                         <!-- uses solid style -->
                         <i class="base-color fas fa-book fa-3x"></i>
                         <h4>PREVIOUS QUESTION PAPER</h4>
                         <a href="{{ route('user.offline.batch.2022.(batch-2).paper') }}"
                             class=" btn color-two button text-white">VIEW</a>
                     </div>
                 </div>
                 <!-- end single features -->
             </div>
             <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">
                 <!-- 2 -->
                 <div class="single-features-light text-center">
                     <!-- single features -->
                     <div>
                         <i class="base-color fas fa-book fa-3x"></i>
                         <h4>TEST SERIES</h4>
                         <a href="{{ route('user.offline.batch.2022.(batch-2).test', $course->title) }}"
                             class=" btn color-two button text-white">VIEW</a>
                     </div>
                 </div>
             </div>
             <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">
                 <div class="single-features-light text-center">
                     <!-- single features -->
                     <div>
                         <i class="base-color fas fa-book fa-3x"></i>
                         <h4>RECORDED CLASSES</h4>
                         <a href="{{ route('user.new.video', $course->title) }}"
                             class=" btn color-two button text-white">View</a>
                     </div>
                 </div>
                 <!-- end single features -->
             </div>
             <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">
                 <div class="single-features-light text-center">
                     <!-- single features -->
                     <div>
                         <i class="base-color fas fa-book fa-3x"></i>
                         <h4>CLASS PPT</h4>
                         <a href="{{ route('user.offline.batch.2022.(batch-2).classppt') }}"
                             class=" btn color-two button text-white">View</a>
                     </div>
                 </div>
             </div>
             @if (str_contains($course->title, 'OFFLINE'))
             <!--  Prelims (PYQ) -->
             <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">
                 <div class="single-features-light text-center">
                     <!-- single features -->
                     <div>
                         <i class="base-color fas fa-book fa-3x"></i>
                         <h4>APSC PRELIMS (PYQ)</h4>
                         <a href="{{ route('user.apsc.prelims.pyq') }}"
                             class=" btn color-two button text-white">View</a>
                     </div>
                 </div>
             </div>
             @endif
             @endif
             @if ($course->title == 'APSC STUDY MATERIAL')

             <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">
                 <div class="single-features-light text-center">
                     <div>
                         <i class="base-color fas fa-book fa-3x"></i>
                         <h4>50 Model Test</h4>
                         <a href="{{ route('testseriesquiz.index', [$course->title ,"APSC"]) }}"
                             class=" btn color-two button text-white">VIEW</a>
                     </div>
                 </div>
             </div>
             <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">
                 <!-- 2 -->
                 <div class="single-features-light text-center">
                     <!-- single features -->
                     <div>
                         <i class="base-color fas fa-book fa-3x"></i>
                         <h4>STUDY PLAN</h4>
                         @if ($course->title == 'APSC STUDY MATERIAL')
                         <a href="{{ route('user.study.material.apsc.study.plan') }}"
                             class=" btn color-two button text-white">DOWNLOAD</a>
                         @endif

                     </div>
                 </div>

                 <!-- end single features -->
             </div>
             <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">
                 <!-- 2 -->
                 <div class="single-features-light text-center">
                     <!-- single features -->
                     <div>
                         <i class="base-color fas fa-book fa-3x"></i>
                         <h4>ACS MATERIALS</h4>
                         @if ($course->title == 'APSC STUDY MATERIAL')
                         <a href="{{ route('user.study.material.apsc.study.material') }}"
                             class=" btn color-two button text-white">VIEW</a>
                         @endif
                     </div>
                 </div>
                 <!-- end single features -->
             </div>
             <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">
                 <div class="single-features-light text-center">
                     <div>
                         <i class="base-color fas fa-book fa-3x"></i>
                         <h4>ASSAM CURRENT AFFAIRS</h4>
                         <a href="{{ route('user.mock.test.material') }}"
                             class=" btn color-two button text-white">View</a>
                     </div>
                 </div>
             </div>
             <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">
                 <div class="single-features-light text-center">
                     <div>
                         <i class="base-color fas fa-book fa-3x"></i>
                         <h4>ASSAM TRIBUNE</h4>
                         <a href="{{ route('apsc_all.pdfs') }}" class=" btn color-two button text-white">View</a>
                     </div>
                 </div>
             </div>
             <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">
                 <!-- 1 -->
                 <div class="single-features-light text-center">
                     <!-- single features -->
                     <div>
                         <!-- uses solid style -->
                         <i class="base-color fas fa-book fa-3x"></i>
                         <h4>PREVIOUS QUESTION PAPER</h4>
                         @if ($course->title == 'APSC STUDY MATERIAL')
                         <a href="{{ route('user.study.material.apsc.study.paper') }}"
                             class=" btn color-two button text-white">VIEW</a>
                         @endif
                     </div>
                 </div>
                 <!-- end single features -->
             </div>

             <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">
                 <div class="single-features-light text-center">
                     <!-- single features -->
                     <div>
                         <i class="base-color fas fa-book fa-3x"></i>
                         <h4>MAINS (PYQ)</h4>
                         <a href="{{ route('maindocuments') }}" class=" btn color-two button text-white">View</a>
                     </div>
                 </div>
             </div>
             <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">
                 <div class="single-features-light text-center">
                     <!-- single features -->
                     <div>
                         <i class="base-color fas fa-book fa-3x"></i>
                         <h4>APSC PRELIMS (PYQ)</h4>
                         <a href="{{ route('user.apsc.prelims.pyq') }}"
                             class=" btn color-two button text-white">View</a>
                     </div>
                 </div>
             </div>

             @endif

             @if ($course->title == 'APSC MAINS 2021')
             <!-- <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3"> -->
             <!-- 3 -->
             <!-- <div class="single-features-light text-center"> -->
             <!-- single features -->
             <!-- <div> -->
             <!-- <i class="base-color fab fa-leanpub fa-3x"></i> -->
             <!-- <h4>TEST SERIES</h4> -->
             <!-- <a href="{{ route('user.apsc.mains.2021.test', $course->title) }}" class="btn color-two button text-white">VIEW</a> -->
             <!-- </div> -->
             <!-- </div> -->
             <!-- end single features -->
             <!-- </div> -->
             <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">
                 <div class="single-features-light text-center">
                     <!-- single features -->
                     <div>
                         <i class="base-color fas fa-book fa-3x"></i>
                         <h4>RECORDED CLASSES</h4>
                         <a href="{{ route('user.class.video.index', $course->title) }}"
                             class=" btn color-two button text-white">View</a>
                     </div>
                 </div>
                 <!-- end single features -->
             </div>
             <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">
                 <div class="single-features-light text-center">
                     <!-- single features -->
                     <div>
                         <i class="base-color fas fa-book fa-3x"></i>
                         <h4>MAINS (PYQ)</h4>
                         <a href="{{ route('mainspyq') }}" class=" btn color-two button text-white">View</a>
                     </div>
                 </div>
             </div>
             <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">
                 <div class="single-features-light text-center">
                     <!-- single features -->
                     <div>
                         <i class="base-color fas fa-book fa-3x"></i>
                         <h4>ACS MATERIALS</h4>
                         <a href="{{ route('apsc.mains.materials') }}" class=" btn color-two button text-white">View</a>
                     </div>
                 </div>
             </div>
             <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">
                 <div class="single-features-light text-center">
                     <div>
                         <i class="base-color fab fa-leanpub fa-3x"></i>
                         <h4>Question Center</h4>
                         <a href="{{ route('user.apsc.mains.test.series.paper', $course->title) }}"
                             class="btn color-two button text-white">VIEW</a>
                     </div>
                 </div>
             </div>
             <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">
                 <div class="single-features-light text-center">
                     <div>
                         <i class="base-color fas fa-book fa-3x"></i>
                         <h4>Answer Center</h4>
                         <a href="{{ route('user.apsc.mains.test.series.answer', $course->title) }}"
                             class=" btn color-two button text-white">VIEW</a>
                     </div>
                 </div>
             </div>
             <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">
                 <div class="single-features-light text-center">
                     <div>
                         <i class="base-color fas fa-book fa-3x"></i>
                         <h4>Result</h4>
                         <a href="{{ route('user.result.cards', $course->title) }}"
                             class=" btn color-two button text-white">VIEW</a>
                     </div>
                 </div>
             </div>
             @endif
             @if ($course->title == 'APSC MAINS TEST SERIES')
             <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">
                 <div class="single-features-light text-center">
                     <div>
                         <i class="base-color fab fa-leanpub fa-3x"></i>
                         <h4>Question Center</h4>
                         <a href="{{ route('user.apsc.mains.test.series.paper', $course->title) }}"
                             class="btn color-two button text-white">VIEW</a>
                     </div>
                 </div>
             </div>
             <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">
                 <div class="single-features-light text-center">
                     <div>
                         <i class="base-color fas fa-book fa-3x"></i>
                         <h4>Answer Center</h4>
                         <a href="{{ route('user.apsc.mains.test.series.answer', $course->title) }}"
                             class=" btn color-two button text-white">VIEW</a>
                     </div>
                 </div>
             </div>
             <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">
                 <div class="single-features-light text-center">
                     <div>
                         <i class="base-color fas fa-book fa-3x"></i>
                         <h4>Result</h4>
                         <a href="{{ route('user.result.cards', $course->title) }}"
                             class=" btn color-two button text-white">VIEW</a>
                     </div>
                 </div>
             </div>
             @endif
             <!-- 100 current affairs -->

             @if ($course->title == 'APSC CRASH COURSE')

             <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">
                 <!-- 2 -->
                 <div class="single-features-light text-center">
                     <!-- single features -->
                     <div>
                         <i class="base-color fas fa-book fa-3x"></i>
                         <h4>STUDY PLAN</h4>
                         <a href="{{ route('user.apsc.crash.course.plan') }}"
                             class=" btn color-two button text-white">DOWNLOAD</a>
                     </div>
                 </div>
                 <!-- end single features -->
             </div>
             <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">
                 <!-- 2 -->
                 <div class="single-features-light text-center">
                     <!-- single features -->
                     <div>
                         <i class="base-color fas fa-book fa-3x"></i>
                         <h4>ACS MATERIALS</h4>
                         <a href="{{ route('user.apsc.crash.course.material') }}"
                             class=" btn color-two button text-white">VIEW</a>
                     </div>
                 </div>
                 <!-- end single features -->
             </div>

             <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">
                 <!-- 1 -->
                 <div class="single-features-light text-center">
                     <!-- single features -->
                     <div>
                         <!-- uses solid style -->
                         <i class="base-color fas fa-book fa-3x"></i>
                         <h4>PREVIOUS QUESTION PAPER</h4>
                         <a href="{{ route('user.apsc.crash.course.paper') }}"
                             class=" btn color-two button text-white">VIEW</a>
                     </div>
                 </div>
                 <!-- end single features -->
             </div>
             <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">
                 <div class="single-features-light text-center">
                     <!-- single features -->
                     <div>
                         <i class="base-color fas fa-book fa-3x"></i>
                         <h4>CLASS PPT</h4>
                         <a href="{{ route('user.apsc.crash.course.classppt') }}"
                             class=" btn color-two button text-white">View</a>
                     </div>
                 </div>
             </div>

             <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">
                 <div class="single-features-light text-center">
                     <!-- single features -->
                     <div>
                         <i class="base-color fas fa-book fa-3x"></i>
                         <h4>RECORDED CLASSES</h4>
                         <a href="{{ route('user.new.video', $course->title) }}"
                             class=" btn color-two button text-white">VIEW</a>
                     </div>
                 </div>
                 <!-- end single features -->
             </div>

             <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">
                 <div class="single-features-light text-center">
                     <div>
                         <i class="base-color fas fa-book fa-3x"></i>
                         <h4>ASSAM CURRENT AFFAIRS</h4>
                         <a href="{{ route('user.mock.test.material') }}"
                             class=" btn color-two button text-white">View</a>
                     </div>
                 </div>
             </div>
             <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">
                 <div class="single-features-light text-center">
                     <div>
                         <i class="base-color fas fa-book fa-3x"></i>
                         <h4>ASSAM TRIBUNE</h4>
                         <a href="{{ route('apsc_all.pdfs') }}" class=" btn color-two button text-white">View</a>
                     </div>
                 </div>
             </div>
             @endif

             @if ($course->title == 'HISTORY OF ASSAM')
             <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">
                 <div class="single-features-light text-center">
                     <!-- single features -->
                     <div>
                         <i class="base-color fas fa-book fa-3x"></i>
                         <h4>ACS MATERIALS</h4>
                         <a href="{{ route('user.history.of.assam.material') }}"
                             class=" btn color-two button text-white">View</a>
                     </div>
                 </div>
             </div>
             <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">
                 <div class="single-features-light text-center">
                     <!-- single features -->
                     <div>
                         <i class="base-color fas fa-book fa-3x"></i>
                         <h4>CLASS PPT</h4>
                         <a href="{{ route('user.history.of.assam.classppt') }}"
                             class=" btn color-two button text-white">View</a>
                     </div>
                 </div>
             </div>
             <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">
                 <div class="single-features-light text-center">
                     <!-- single features -->
                     <div>
                         <i class="base-color fas fa-book fa-3x"></i>
                         <h4>RECORDED CLASSES</h4>
                         <a href="{{ route('user.class.video.index', $course->title) }}"
                             class=" btn color-two button text-white">View</a>
                     </div>
                 </div>
                 <!-- end single features -->
             </div>
             <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">
                 <div class="single-features-light text-center">
                     <div>
                         <i class="base-color fas fa-book fa-3x"></i>
                         <h4>ASSAM CURRENT AFFAIRS</h4>
                         <a href="{{ route('user.mock.test.material') }}"
                             class=" btn color-two button text-white">View</a>
                     </div>
                 </div>
             </div>
             <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">
                 <div class="single-features-light text-center">
                     <div>
                         <i class="base-color fas fa-book fa-3x"></i>
                         <h4>ASSAM TRIBUNE</h4>
                         <a href="{{ route('apsc_all.pdfs') }}" class=" btn color-two button text-white">View</a>
                     </div>
                 </div>
             </div>
             @endif

             @if ($course->title != 'APSC ADVANCED CSAT (GS II)' &&
             $course->title != 'HISTORY OF ASSAM' &&
             $course->title != 'SCIENCE & TECHNOLOGY' &&
             $course->title != 'ECOLOGY & ENVIRONMENT' &&
             $course->title != 'INDIAN HISTORY, ART & CULTURE' &&
             $course->title != 'GEOGRAPHY' &&
             $course->title != 'INDIAN ECONOMY' &&
             $course->title != 'SCIENCE & TECHNOLOGY(UPSC)' &&
             $course->title != 'ECOLOGY & ENVIRONMENT(UPSC)' &&
             $course->title != 'INDIAN HISTORY, ART & CULTURE(UPSC)' &&
             $course->title != 'GEOGRAPHY(UPSC)' &&
             $course->title != 'INDIAN ECONOMY(UPSC)' &&
             $course->title != 'CSAT & CURRENT AFFAIRS' &&
             $course->title != 'APSC 2023 MAINS PREPARATION' &&
             $course->title != 'DAILY MAINS TEST' &&
             $course->title != 'DAILY MAINS TEST 2023' &&
             $course->title != 'WRITE TO WIN' &&
             $course->title != 'WRITE TO WIN .')
             <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">
                 <div class="single-features-light text-center">
                     <div>
                         <i class="base-color fab fa-leanpub fa-3x"></i>
                         <h4>100 important current affairs</h4>
                         <a href="{{ asset('pdf/ACS Prelims Current Affairs 2022 (100).pdf') }}" target="_blank"
                             class="btn color-two button text-white">VIEW</a>
                     </div>
                 </div>
             </div>
             <!-- REPORTS AND INDICES 2022 COMPILATION -->
             <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">
                 <div class="single-features-light text-center">
                     <div>
                         <i class="base-color fab fa-leanpub fa-3x"></i>
                         <h4>REPORTS AND INDICES 2022 COMPILATION</h4>
                         <a href="{{ asset('pdf/ACS Indices Reports Combilaions.pdf') }}" target="_blank"
                             class="btn color-two button text-white">VIEW</a>
                     </div>
                 </div>
             </div>
             <!-- INTERNATIONAL ORGANIZATIONS/INSTITUTIONS/GROUPINGS IN NEWS -->
             <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">
                 <div class="single-features-light text-center">
                     <div>
                         <i class="base-color fab fa-leanpub fa-3x"></i>
                         <h4>INTERNATIONAL ORGANIZATIONS/ INSTITUTIONS/ GROUPINGS IN NEWS</h4>
                         <a href="{{ asset('pdf/ACSInternationalOrganizationCombilaions.pdf') }}" target="_blank"
                             class="btn color-two button text-white">VIEW</a>
                     </div>
                 </div>
             </div>
             <!-- current affair question compilation -->
             <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">
                 <div class="single-features-light text-center">
                     <div>
                         <i class="base-color fab fa-leanpub fa-3x"></i>
                         <h4>ACS CURRENT AFFAIRS QUESTIONS COMPILATION</h4>
                         <a href="{{ asset('pdf/ACSPrelimsCurrentAffairsQuestionsCompilation22.pdf') }}" target="_blank"
                             class="btn color-two button text-white">VIEW</a>
                     </div>
                 </div>
             </div>
             @endif

             @if ($course->title == 'INDIAN ECONOMY(UPSC)')

             <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">
                 <div class="single-features-light text-center">
                     <div>
                         <i class="base-color fas fa-book fa-3x"></i>
                         <h4>STUDY PLAN</h4>
                         <a href="{{ route('user.upsc.indian.economy.recorded.plan') }}"
                             class=" btn color-two button text-white">DOWNLOAD</a>
                     </div>
                 </div>
             </div>
             <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">

                 <div class="single-features-light text-center">
                     <div>
                         <i class="base-color fas fa-book fa-3x"></i>
                         <h4>ACS MATERIALS</h4>
                         <a href="{{ route('user.upsc.indian.economy.recorded.material') }}"
                             class=" btn color-two button text-white">VIEW</a>
                     </div>
                 </div>
             </div>

             <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">
                 <div class="single-features-light text-center">
                     <div>
                         <i class="base-color fas fa-book fa-3x"></i>
                         <h4>PREVIOUS QUESTION PAPER</h4>
                         <a href="{{ route('user.upsc.indian.economy.recorded.paper') }}"
                             class=" btn color-two button text-white">VIEW</a>
                     </div>
                 </div>
             </div>
             <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">
                 <div class="single-features-light text-center">
                     <div>
                         <i class="base-color fas fa-book fa-3x"></i>
                         <h4>PPTS</h4>
                         <a href="{{ route('user.upsc.indian.economy.recorded.classppt') }}"
                             class=" btn color-two button text-white">View</a>
                     </div>
                 </div>
             </div>

             <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">
                 <div class="single-features-light text-center">
                     <div>
                         <i class="base-color fas fa-book fa-3x"></i>
                         <h4>RECORDED CLASSES</h4>
                         <a href="{{ route('user.new.video','INDIAN ECONOMY') }}"
                             class=" btn color-two button text-white">VIEW</a>
                     </div>
                 </div>
             </div>
             @endif

             @if ($course->title == 'SCIENCE & TECHNOLOGY')

             <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">

                 <div class="single-features-light text-center">
                     <div>
                         <i class="base-color fas fa-book fa-3x"></i>
                         <h4>STUDY PLAN</h4>
                         <a href="{{ route('user.apsc.science.tech.recorded.plan') }}"
                             class=" btn color-two button text-white">DOWNLOAD</a>
                     </div>
                 </div>
             </div>
             <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">
                 <div class="single-features-light text-center">
                     <div>
                         <i class="base-color fas fa-book fa-3x"></i>
                         <h4>ACS MATERIALS</h4>
                         <a href="{{ route('user.apsc.science.tech.recorded.material') }}"
                             class=" btn color-two button text-white">VIEW</a>
                     </div>
                 </div>
             </div>

             <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">

                 <div class="single-features-light text-center">
                     <div>
                         <i class="base-color fas fa-book fa-3x"></i>
                         <h4>PREVIOUS QUESTION PAPER</h4>
                         <a href="{{ route('user.apsc.science.tech.recorded.paper') }}"
                             class=" btn color-two button text-white">VIEW</a>
                     </div>
                 </div>
             </div>
             <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">
                 <div class="single-features-light text-center">
                     <div>
                         <i class="base-color fas fa-book fa-3x"></i>
                         <h4>CLASS PPT</h4>
                         <a href="{{ route('user.apsc.science.tech.recorded.classppt') }}"
                             class=" btn color-two button text-white">View</a>
                     </div>
                 </div>
             </div>

             <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">
                 <div class="single-features-light text-center">
                     <div>
                         <i class="base-color fas fa-book fa-3x"></i>
                         <h4>RECORDED CLASSES</h4>
                         <a href="{{ route('user.new.video', $course->title) }}"
                             class=" btn color-two button text-white">VIEW</a>
                     </div>
                 </div>
             </div>
             @endif

             @if ($course->title == 'SCIENCE & TECHNOLOGY(UPSC)')

             <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">

                 <div class="single-features-light text-center">
                     <div>
                         <i class="base-color fas fa-book fa-3x"></i>
                         <h4>STUDY PLAN</h4>
                         <a href="{{ route('user.upsc.science.tech.recorded.plan') }}"
                             class=" btn color-two button text-white">DOWNLOAD</a>
                     </div>
                 </div>
             </div>
             <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">
                 <div class="single-features-light text-center">
                     <div>
                         <i class="base-color fas fa-book fa-3x"></i>
                         <h4>ACS MATERIALS</h4>
                         <a href="{{ route('user.upsc.science.tech.recorded.material') }}"
                             class=" btn color-two button text-white">VIEW</a>
                     </div>
                 </div>
             </div>

             <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">
                 <div class="single-features-light text-center">
                     <div>
                         <i class="base-color fas fa-book fa-3x"></i>
                         <h4>PREVIOUS QUESTION PAPER</h4>
                         <a href="{{ route('user.upsc.science.tech.recorded.paper') }}"
                             class=" btn color-two button text-white">VIEW</a>
                     </div>
                 </div>
             </div>
             <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">
                 <div class="single-features-light text-center">
                     <div>
                         <i class="base-color fas fa-book fa-3x"></i>
                         <h4>CLASS PPT</h4>
                         <a href="{{ route('user.upsc.science.tech.recorded.classppt') }}"
                             class=" btn color-two button text-white">View</a>
                     </div>
                 </div>
             </div>

             <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">
                 <div class="single-features-light text-center">
                     <div>
                         <i class="base-color fas fa-book fa-3x"></i>
                         <h4>RECORDED CLASSES</h4>
                         <a href="{{ route('user.new.video', 'SCIENCE & TECHNOLOGY') }}"
                             class=" btn color-two button text-white">VIEW</a>
                     </div>
                 </div>
             </div>
             @endif

             @if ($course->title == 'ECOLOGY & ENVIRONMENT')

             <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">

                 <div class="single-features-light text-center">

                     <div>
                         <i class="base-color fas fa-book fa-3x"></i>
                         <h4>STUDY PLAN</h4>
                         <a href="{{ route('user.apsc.eco&env.recorded.plan') }}"
                             class=" btn color-two button text-white">DOWNLOAD</a>
                     </div>
                 </div>

             </div>
             <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">

                 <div class="single-features-light text-center">

                     <div>
                         <i class="base-color fas fa-book fa-3x"></i>
                         <h4>ACS MATERIALS</h4>
                         <a href="{{ route('user.apsc.eco&env.recorded.material') }}"
                             class=" btn color-two button text-white">VIEW</a>
                     </div>
                 </div>

             </div>
             <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">
                 <div class="single-features-light text-center">

                     <div>
                         <i class="base-color fas fa-book fa-3x"></i>
                         <h4>CLASS PPT</h4>
                         <a href="{{ route('user.apsc.eco&env.recorded.classppt') }}"
                             class=" btn color-two button text-white">View</a>
                     </div>
                 </div>
             </div>

             <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">
                 <div class="single-features-light text-center">

                     <div>
                         <i class="base-color fas fa-book fa-3x"></i>
                         <h4>RECORDED CLASSES</h4>
                         <a href="{{ route('user.new.video', $course->title) }}"
                             class=" btn color-two button text-white">VIEW</a>
                     </div>
                 </div>

             </div>
             @endif

             @if ($course->title == 'ECOLOGY & ENVIRONMENT(UPSC)')

             <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">

                 <div class="single-features-light text-center">
                     <div>
                         <i class="base-color fas fa-book fa-3x"></i>
                         <h4>STUDY PLAN</h4>
                         <a href="{{ route('user.upsc.eco&env.recorded.plan') }}"
                             class=" btn color-two button text-white">DOWNLOAD</a>
                     </div>
                 </div>
             </div>
             <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">

                 <div class="single-features-light text-center">
                     <div>
                         <i class="base-color fas fa-book fa-3x"></i>
                         <h4>ACS MATERIALS</h4>
                         <a href="{{ route('user.upsc.eco&env.recorded.material') }}"
                             class=" btn color-two button text-white">VIEW</a>
                     </div>
                 </div>
             </div>
             <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">
                 <div class="single-features-light text-center">
                     <div>
                         <i class="base-color fas fa-book fa-3x"></i>
                         <h4>CLASS PPT</h4>
                         <a href="{{ route('user.upsc.eco&env.recorded.classppt') }}"
                             class=" btn color-two button text-white">View</a>
                     </div>
                 </div>
             </div>

             <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">
                 <div class="single-features-light text-center">
                     <div>
                         <i class="base-color fas fa-book fa-3x"></i>
                         <h4>RECORDED CLASSES</h4>
                         <a href="{{ route('user.new.video', 'ECOLOGY & ENVIRONMENT') }}"
                             class=" btn color-two button text-white">VIEW</a>
                     </div>
                 </div>
             </div>
             @endif

             @if ($course->title == 'INDIAN HISTORY, ART & CULTURE')

             <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">

                 <div class="single-features-light text-center">

                     <div>
                         <i class="base-color fas fa-book fa-3x"></i>
                         <h4>STUDY PLAN</h4>
                         <a href="{{ route('user.apsc.history.art.recorded.plan') }}"
                             class=" btn color-two button text-white">DOWNLOAD</a>
                     </div>
                 </div>

             </div>
             <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">

                 <div class="single-features-light text-center">

                     <div>
                         <i class="base-color fas fa-book fa-3x"></i>
                         <h4>ACS MATERIALS</h4>
                         <a href="{{ route('user.apsc.history.art.recorded.material') }}"
                             class=" btn color-two button text-white">VIEW</a>
                     </div>
                 </div>

             </div>

             <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">

                 <div class="single-features-light text-center">

                     <div>

                         <i class="base-color fas fa-book fa-3x"></i>
                         <h4>PREVIOUS QUESTION PAPER</h4>
                         <a href="{{ route('user.apsc.history.art.recorded.paper') }}"
                             class=" btn color-two button text-white">VIEW</a>
                     </div>
                 </div>

             </div>
             <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">
                 <div class="single-features-light text-center">

                     <div>
                         <i class="base-color fas fa-book fa-3x"></i>
                         <h4>CLASS PPT</h4>
                         <a href="{{ route('user.apsc.history.art.recorded.classppt') }}"
                             class=" btn color-two button text-white">View</a>
                     </div>
                 </div>
             </div>

             <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">
                 <div class="single-features-light text-center">

                     <div>
                         <i class="base-color fas fa-book fa-3x"></i>
                         <h4>RECORDED CLASSES</h4>
                         <a href="{{ route('user.new.video', $course->title) }}"
                             class=" btn color-two button text-white">VIEW</a>
                     </div>
                 </div>

             </div>
             @endif

             @if ($course->title == 'INDIAN HISTORY, ART & CULTURE(UPSC)')

             <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">

                 <div class="single-features-light text-center">

                     <div>
                         <i class="base-color fas fa-book fa-3x"></i>
                         <h4>STUDY PLAN</h4>
                         <a href="{{ route('user.upsc.history.art.recorded.plan') }}"
                             class=" btn color-two button text-white">DOWNLOAD</a>
                     </div>
                 </div>

             </div>
             <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">

                 <div class="single-features-light text-center">

                     <div>
                         <i class="base-color fas fa-book fa-3x"></i>
                         <h4>ACS MATERIALS</h4>
                         <a href="{{ route('user.upsc.history.art.recorded.material') }}"
                             class=" btn color-two button text-white">VIEW</a>
                     </div>
                 </div>

             </div>

             <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">

                 <div class="single-features-light text-center">

                     <div>
                         <i class="base-color fas fa-book fa-3x"></i>
                         <h4>PREVIOUS QUESTION PAPER</h4>
                         <a href="{{ route('user.upsc.history.art.recorded.paper') }}"
                             class=" btn color-two button text-white">VIEW</a>
                     </div>
                 </div>

             </div>
             <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">
                 <div class="single-features-light text-center">

                     <div>
                         <i class="base-color fas fa-book fa-3x"></i>
                         <h4>CLASS PPT</h4>
                         <a href="{{ route('user.upsc.history.art.recorded.classppt') }}"
                             class=" btn color-two button text-white">View</a>
                     </div>
                 </div>
             </div>

             <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">
                 <div class="single-features-light text-center">

                     <div>
                         <i class="base-color fas fa-book fa-3x"></i>
                         <h4>RECORDED CLASSES</h4>
                         <a href="{{ route('user.new.video', 'INDIAN HISTORY, ART & CULTURE') }}"
                             class=" btn color-two button text-white">VIEW</a>
                     </div>
                 </div>

             </div>
             @endif

             @if ($course->title == 'GEOGRAPHY')

             <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">

                 <div class="single-features-light text-center">

                     <div>
                         <i class="base-color fas fa-book fa-3x"></i>
                         <h4>STUDY PLAN</h4>
                         <a href="{{ route('user.apsc.geography.recorded.plan') }}"
                             class=" btn color-two button text-white">DOWNLOAD</a>
                     </div>
                 </div>

             </div>
             <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">

                 <div class="single-features-light text-center">

                     <div>
                         <i class="base-color fas fa-book fa-3x"></i>
                         <h4>ACS MATERIALS</h4>
                         <a href="{{ route('user.apsc.geography.recorded.material') }}"
                             class=" btn color-two button text-white">VIEW</a>
                     </div>
                 </div>

             </div>

             <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">

                 <div class="single-features-light text-center">

                     <div>
                         <i class="base-color fas fa-book fa-3x"></i>
                         <h4>PREVIOUS QUESTION PAPER</h4>
                         <a href="{{ route('user.apsc.geography.recorded.paper') }}"
                             class=" btn color-two button text-white">VIEW</a>
                     </div>
                 </div>

             </div>
             <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">
                 <div class="single-features-light text-center">

                     <div>
                         <i class="base-color fas fa-book fa-3x"></i>
                         <h4>CLASS PPT</h4>
                         <a href="{{ route('user.apsc.geography.recorded.classppt') }}"
                             class=" btn color-two button text-white">View</a>
                     </div>
                 </div>
             </div>

             <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">
                 <div class="single-features-light text-center">

                     <div>
                         <i class="base-color fas fa-book fa-3x"></i>
                         <h4>RECORDED CLASSES</h4>
                         <a href="{{ route('user.new.video', $course->title) }}"
                             class=" btn color-two button text-white">VIEW</a>
                     </div>
                 </div>

             </div>
             @endif

             @if ($course->title == 'GEOGRAPHY(UPSC)')

             <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">

                 <div class="single-features-light text-center">

                     <div>
                         <i class="base-color fas fa-book fa-3x"></i>
                         <h4>STUDY PLAN</h4>
                         <a href="{{ route('user.upsc.geography.recorded.plan') }}"
                             class=" btn color-two button text-white">DOWNLOAD</a>
                     </div>
                 </div>

             </div>
             <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">

                 <div class="single-features-light text-center">

                     <div>
                         <i class="base-color fas fa-book fa-3x"></i>
                         <h4>ACS MATERIALS</h4>
                         <a href="{{ route('user.upsc.geography.recorded.material') }}"
                             class=" btn color-two button text-white">VIEW</a>
                     </div>
                 </div>

             </div>

             <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">

                 <div class="single-features-light text-center">

                     <div>
                         <i class="base-color fas fa-book fa-3x"></i>
                         <h4>PREVIOUS QUESTION PAPER</h4>
                         <a href="{{ route('user.upsc.geography.recorded.paper') }}"
                             class=" btn color-two button text-white">VIEW</a>
                     </div>
                 </div>

             </div>
             <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">
                 <div class="single-features-light text-center">

                     <div>
                         <i class="base-color fas fa-book fa-3x"></i>
                         <h4>CLASS PPT</h4>
                         <a href="{{ route('user.upsc.geography.recorded.classppt') }}"
                             class=" btn color-two button text-white">View</a>
                     </div>
                 </div>
             </div>

             <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">
                 <div class="single-features-light text-center">

                     <div>
                         <i class="base-color fas fa-book fa-3x"></i>
                         <h4>RECORDED CLASSES</h4>
                         <a href="{{ route('user.new.video', 'GEOGRAPHY') }}"
                             class=" btn color-two button text-white">VIEW</a>
                     </div>
                 </div>

             </div>
             @endif

             @if ($course->title == 'CSAT & CURRENT AFFAIRS')

             <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">

                 <div class="single-features-light text-center">

                     <div>
                         <i class="base-color fas fa-book fa-3x"></i>
                         <h4>CLASS PPT</h4>
                         <a href="{{ route('user.csat.current.affairs.classppt') }}"
                             class=" btn color-two button text-white">DOWNLOAD</a>
                     </div>
                 </div>

             </div>

             @endif

             <!--@if ($course->title == '5 Day Free Master Class')-->

             <!--    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">-->

             <!--        <div class="single-features-light text-center">-->

             <!--            <div>-->
             <!--                <i class="base-color fas fa-book fa-3x"></i>-->
             <!--                <h4>STUDY PLAN</h4>-->
             <!--                <a href="{{ route('user.mains.2023.plan') }}"-->
             <!--                    class=" btn color-two button text-white">DOWNLOAD</a>-->
             <!--            </div>-->
             <!--        </div>-->

             <!--    </div>-->
             <!--<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">-->

             <!--    <div class="single-features-light text-center">-->

             <!--        <div>-->
             <!--            <i class="base-color fas fa-book fa-3x"></i>-->
             <!--            <h4>ACS MATERIALS</h4>-->
             <!--            <a href="{{ route('user.mains.2023.material') }}"-->
             <!--                class=" btn color-two button text-white">VIEW</a>-->
             <!--        </div>-->
             <!--    </div>-->

             <!--</div>-->

             <!--    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">-->

             <!--        <div class="single-features-light text-center">-->

             <!--            <div>-->
             <!--                <i class="base-color fas fa-book fa-3x"></i>-->
             <!--                <h4>PREVIOUS QUESTION PAPER</h4>-->
             <!--                <a href="{{ route('user.mains.2023.paper') }}"-->
             <!--                    class=" btn color-two button text-white">VIEW</a>-->
             <!--            </div>-->
             <!--        </div>-->

             <!--    </div>-->
             <!--    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">-->
             <!--        <div class="single-features-light text-center">-->

             <!--            <div>-->
             <!--                <i class="base-color fas fa-book fa-3x"></i>-->
             <!--                <h4>CLASS PPT</h4>-->
             <!--                <a href="{{ route('user.mains.2023.classppt') }}"-->
             <!--                    class=" btn color-two button text-white">View</a>-->
             <!--            </div>-->
             <!--        </div>-->
             <!--    </div>-->

             <!--    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">-->
             <!--        <div class="single-features-light text-center">-->

             <!--            <div>-->
             <!--                <i class="base-color fas fa-book fa-3x"></i>-->
             <!--                <h4>RECORDED CLASSES</h4>-->
             <!--               <a href="{{ route('user.new.video', 'GEOGRAPHY') }}"-->
             <!--                    class=" btn color-two button text-white">VIEW</a>-->
             <!--            </div>-->
             <!--        </div>-->

             <!--    </div>-->
             <!--@endif-->

             @if ($course->title == 'APSC 2023 MAINS PREPARATION')

             <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-2">
                 <div class="single-features-light text-center">
                     <!-- single features -->
                     <div>
                         <i class="base-color fas fa-clipboard fa-3x"></i>
                         <h4>ANSWER WRITING & EVALUATION REPORT</h4>
                         <a href="{{ route('assignments.index') }}" class="btn color-two button text-white">View</a>
                     </div>
                 </div>
             </div>


             <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">

                 <div class="single-features-light text-center">

                     <div>
                         <i class="base-color fas fa-book fa-3x"></i>
                         <h4>TOPPERS ANSWER</h4>
                         <a href="{{ route('user.mains.2023.material.topper_answer') }}"
                             class=" btn color-two button text-white">VIEW</a>
                     </div>
                 </div>

             </div>

             <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">

                 <div class="single-features-light text-center">

                     <div>
                         <i class="base-color fas fa-book fa-3x"></i>
                         <h4>MAINS MATERIALS</h4>
                         <h4>GS-I</h4>
                         <a href="{{ route('user.mains.2023.material.(gs-1)') }}"
                             class=" btn color-two button text-white">VIEW</a>
                     </div>
                 </div>

             </div>

             <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">

                 <div class="single-features-light text-center">

                     <div>
                         <i class="base-color fas fa-book fa-3x"></i>
                         <h4>MAINS MATERIALS</h4>
                         <h4>GS-II</h4>
                         <a href="{{ route('user.mains.2023.material.(gs-2)') }}"
                             class=" btn color-two button text-white">VIEW</a>
                     </div>
                 </div>

             </div>

             <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">

                 <div class="single-features-light text-center">

                     <div>
                         <i class="base-color fas fa-book fa-3x"></i>
                         <h4>MAINS MATERIALS</h4>
                         <h4>GS-III</h4>
                         <a href="{{ route('user.mains.2023.material.(gs-3)') }}"
                             class=" btn color-two button text-white">VIEW</a>
                     </div>
                 </div>

             </div>

             <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">

                 <div class="single-features-light text-center">

                     <div>
                         <i class="base-color fas fa-book fa-3x"></i>
                         <h4>MAINS MATERIALS</h4>
                         <h4>GS-IV</h4>
                         <a href="{{ route('user.mains.2023.material.(gs-4)') }}"
                             class=" btn color-two button text-white">VIEW</a>
                     </div>
                 </div>

             </div>

             <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">

                 <div class="single-features-light text-center">

                     <div>
                         <i class="base-color fas fa-book fa-3x"></i>
                         <h4>MAINS MATERIALS</h4>
                         <h4>GS-V</h4>
                         <a href="{{ route('user.mains.2023.material.(gs-6)') }}"
                             class=" btn color-two button text-white">VIEW</a>
                     </div>
                 </div>

             </div>


             <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">

                 <div class="single-features-light text-center">

                     <div>
                         <i class="base-color fas fa-book fa-3x"></i>
                         <h4>UPSC MAINS PYQ</h4>
                         <a href="{{ route('user.mains.2023.upaper') }}"
                             class=" btn color-two button text-white">VIEW</a>
                     </div>
                 </div>

             </div>


             <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">

                 <div class="single-features-light text-center">

                     <div>
                         <i class="base-color fas fa-book fa-3x"></i>
                         <h4>APSC MAINS PYQ</h4>
                         <a href="{{ route('user.mains.2023.paper') }}"
                             class=" btn color-two button text-white">VIEW</a>
                     </div>
                 </div>

             </div>


             <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">
                 <div class="single-features-light text-center">
                     <div>
                         <i class="base-color fas fa-book fa-3x"></i>
                         <h4>RECORDED CLASSES</h4>
                         <a href="{{ route('user.class.video.index', 'APSC 2023 MAINS PREPARATION') }}"
                             class=" btn color-two button text-white">VIEW</a>
                     </div>
                 </div>
             </div>
             @endif


             @if ($course->title != 'SCIENCE & TECHNOLOGY(UPSC)' &&
             $course->title != 'ECOLOGY & ENVIRONMENT(UPSC)' &&
             $course->title != 'INDIAN HISTORY, ART & CULTURE(UPSC)' &&
             $course->title != 'GEOGRAPHY(UPSC)' &&
             $course->title != 'INDIAN ECONOMY(UPSC)' &&
             $course->title != 'APSC 2023 MAINS PREPARATION' &&
             $course->title != 'DAILY MAINS TEST' &&
             $course->title != 'DAILY MAINS TEST 2023' &&
             $course->title != 'WRITE TO WIN' &&
             $course->title != 'WRITE TO WIN .')
             <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">
                 <div class="single-features-light text-center">
                     <div>
                         <i class="base-color fab fa-leanpub fa-3x"></i>
                         <h4>ONE LINER GENERAL CURRENT AFFAIRS</h4>
                         <a href="{{ route('user.csat.current.affairs.one') }}" target="_blank"
                             class="btn color-two button text-white">VIEW</a>
                     </div>
                 </div>
             </div>

             @endif



             @endif
         </div>
         <!-- .row end -->
     </div>
     <!-- .row end -->
 </div>
 <hr>
 <!-- .container end -->