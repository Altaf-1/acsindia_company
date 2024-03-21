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

         <div class="row ml-2 mr-2">

            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">
                 <div class="single-features-light text-center">
                     <div>
                         <i class="base-color fas fa-book fa-3x"></i>
                         <h4>CURRENT AFFAIRS 2024</h4>
                         <a href="https://acsindiaias.com/acsyear"
                             class=" btn color-two button text-white">VIEW</a>
                     </div>
                 </div>
            </div>

             @if ($course->title != 'APSC BOOSTER COURSE (G)' &&
             $course->title != 'APSC BOOSTER COURSE (H)' &&
             $course->title != 'APSC BOOSTER COURSE (I)' &&
             $course->title != 'APSC BOOSTER COURSE (J)' &&
             $course->title != 'GHY BOOSTER COURSE (G)' &&
             $course->title != 'APSC BOOSTER COURSE (K)' &&
             $course->title != 'APSC BOOSTER COURSE (L)' &&
             $course->title != 'APSC BOOSTER COURSE (M)' &&
             $course->title != 'APSC BOOSTER COURSE (N)' &&
             $course->title != 'APSC BOOSTER COURSE (O)' &&
             $course->title != 'APSC BOOSTER COURSE (P)' &&
             $course->title != 'APSC BOOSTER COURSE (F)'&&
             $course->title != 'APSC BOOSTER COURSE (D)'&&
             $course->title != 'APSC BOOSTER COURSE (E)'&&
             $course->title != 'GHY BOOSTER COURSE (G)' &&
             $course->title != 'APSC 2023 INTERVIEW PREPARATION' &&
             $course->title != 'DIBRU OFFLINE (M)' &&
             $course->title != 'GHY OFFLINE (M)' &&
             $course->title != 'DEMO OFFLINE COURSE' &&
             $course->title != 'APSC BOOSTER COURSE (R)' &&
             $course->title != 'APSC BOOSTER COURSE (S_1)' &&
             $course->title != 'APSC BOOSTER COURSE (T)' &&
             $course->title != 'APSC BOOSTER COURSE (U)' &&
             $course->title != 'APSC FEB 2024 COURSE (MRNG)'&&
             $course->title != 'APSC MAR 2024 COURSE (Evng)' &&
             $course->title != 'APSC BOOSTER COURSE (W)' &&
             $course->title != 'APSC SELF STUDY COURSE' &&
             $course->title != 'APSC TEST SERIES 2024' &&
             $course->title != 'APSC BOOSTER COURSE (X-evng)'&&
             $course->title != 'Target 2024 (Online)' &&
             $course->title != 'Target 2024 (Offline)' &&
             $course->title != 'APSC 2024 MAINS PREPARATION')
             <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">
                 <div class="single-features-light text-center">
                     <div>
                         <i class="base-color fas fa-book fa-3x"></i>
                         <h4>APSC TEST SERIES 2023</h4>
                         <a href="{{ route('online.quiz.index', $course->title) }}"
                             class=" btn color-two button text-white">VIEW</a>
                     </div>
                 </div>
             </div>
             @endif




             @if ($course->title != 'APSC PRELIMS TEST SERIES' &&
             $course->title != 'APSC ADVANCED BATCH (C)' &&
             $course->title != 'APSC BOOSTER COURSE (E)' &&
             $course->title != 'APSC BOOSTER COURSE (F)' &&
             $course->title != 'APSC BOOSTER COURSE (G)' &&
             $course->title != 'APSC BOOSTER COURSE (H)' &&
             $course->title != 'APSC BOOSTER COURSE (I)' &&
             $course->title != 'APSC BOOSTER COURSE (J)' &&
             $course->title != 'APSC BOOSTER COURSE (K)' &&
             $course->title != 'APSC BOOSTER COURSE (L)' &&
             $course->title != 'APSC BOOSTER COURSE (M)' &&
             $course->title != 'APSC BOOSTER COURSE (N)' &&
             $course->title != 'APSC BOOSTER COURSE (O)' &&
             $course->title != 'APSC BOOSTER COURSE (P)' &&
             $course->title != 'GHY BOOSTER COURSE (G)' &&
             $course->title != 'APSC 2023 INTERVIEW PREPARATION' &&
             $course->title != 'DIBRU OFFLINE (M)' &&
             $course->title != 'GHY OFFLINE (M)' &&
             $course->title != 'DEMO OFFLINE COURSE' &&
             $course->title != 'APSC BOOSTER COURSE (R)' &&
             $course->title != 'APSC BOOSTER COURSE (S_1)' &&
             $course->title != 'APSC BOOSTER COURSE (T)' &&
             $course->title != 'APSC BOOSTER COURSE (U)' &&
             $course->title != 'APSC FEB 2024 COURSE (MRNG)'&&
             $course->title != 'APSC MAR 2024 COURSE (Evng)' &&
             $course->title != 'APSC SELF STUDY COURSE' &&
             $course->title != 'APSC BOOSTER COURSE (W)' &&
             $course->title != 'APSC TEST SERIES 2024' &&
             $course->title != 'Target 2024 (Offline)' &&
             $course->title != 'APSC 2024 MAINS PREPARATION' &&
             $course->title != 'Target 2024 (Online)' &&
             $course->title != 'APSC BOOSTER COURSE (X-evng)')
             <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">
                 <div class="single-features-light text-center">
                     <div>
                         <i class="base-color fas fa-book fa-3x"></i>
                         <h4>APSC FULL TEST SERIES</h4>
                         <a href="{{ route('testseriesquiz.index', [$course->title ,"APSC"]) }}"
                             class=" btn color-two button text-white">VIEW</a>
                     </div>
                 </div>
             </div>
             @endif


             @if ($course->title != 'APSC PRELIMS TEST SERIES' &&
             $course->title != 'APSC BOOSTER COURSE (F)' &&
             $course->title != 'APSC BOOSTER COURSE (G)' &&
             $course->title != 'APSC BOOSTER COURSE (H)' &&
             $course->title != 'APSC BOOSTER COURSE (I)' &&
             $course->title != 'APSC BOOSTER COURSE (J)' &&
             $course->title != 'APSC BOOSTER COURSE (K)' &&
             $course->title != 'APSC BOOSTER COURSE (L)' &&
             $course->title != 'APSC BOOSTER COURSE (M)' &&
             $course->title != 'APSC BOOSTER COURSE (N)' &&
             $course->title != 'APSC BOOSTER COURSE (O)' &&
             $course->title != 'APSC BOOSTER COURSE (P)' &&
             $course->title != 'GHY BOOSTER COURSE (G)' &&
             $course->title != 'APSC 2023 INTERVIEW PREPARATION' &&
             $course->title != 'DIBRU OFFLINE (M)' &&
             $course->title != 'GHY OFFLINE (M)' &&
             $course->title != 'DEMO OFFLINE COURSE' &&
             $course->title != 'APSC BOOSTER COURSE (R)' &&
             $course->title != 'APSC BOOSTER COURSE (S_1)' &&
             $course->title != 'APSC BOOSTER COURSE (T)' &&
             $course->title != 'APSC BOOSTER COURSE (U)' &&
             $course->title != 'APSC FEB 2024 COURSE (MRNG)'&&
             $course->title != 'APSC MAR 2024 COURSE (Evng)' &&
             $course->title != 'APSC BOOSTER COURSE (W)' &&
             $course->title != 'APSC SELF STUDY COURSE' &&
             $course->title != 'APSC TEST SERIES 2024' &&
             $course->title != 'APSC 2024 MAINS PREPARATION' &&
             $course->title != 'APSC BOOSTER COURSE (X-evng)'&&
             $course->title != 'Target 2024 (Online)' &&
             $course->title != 'Target 2024 (Offline)')
             <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">
                 <div class="single-features-light text-center">
                     <div>
                         <i class="base-color fas fa-book fa-3x"></i>
                         <h4>UPSC TEST SERIES </h4>
                         <a href="{{ route('testseriesquiz.index', [$course->title ,"UPSC"]) }}"
                             class=" btn color-two button text-white">VIEW</a>
                     </div>
                 </div>
             </div>
             @endif

             @if ($course->title == 'GHY OFFLINE (M)')
             <!--  Prelims (PYQ) -->
             <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">
                 <div class="single-features-light text-center">
                     <div>
                         <i class="base-color fas fa-book fa-3x"></i>
                         <h4>APSC PRACTICE TEST SERIES</h4>
                         <a href="{{ route('testseriesquiz.index', [$course->title ,"APSC"]) }}"
                             class=" btn color-two button text-white">VIEW</a>
                     </div>
                 </div>
             </div>
             <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">
                 <div class="single-features-light text-center">
                     <div>
                         <i class="base-color fas fa-book fa-3x"></i>
                         <h4>APSC FULL TEST SERIES</h4>
                         <a href="{{ route('quiz.index', $course->title) }}"
                             class=" btn color-two button text-white">VIEW</a>
                     </div>
                 </div>
             </div>

             @endif

             @if ($course->title == 'Target 2024 (Offline)')
             <!--  Prelims (PYQ) -->
             <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">
                 <div class="single-features-light text-center">
                     <div>
                         <i class="base-color fas fa-book fa-3x"></i>
                         <h4>APSC PRACTICE TEST SERIES</h4>
                         <a href="{{ route('testseriesquiz.index', [$course->title ,"APSC"]) }}"
                             class=" btn color-two button text-white">VIEW</a>
                     </div>
                 </div>
             </div>
             <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">
                 <div class="single-features-light text-center">
                     <div>
                         <i class="base-color fas fa-book fa-3x"></i>
                         <h4>APSC FULL TEST SERIES</h4>
                         <a href="{{ route('quiz.index', $course->title) }}"
                             class=" btn color-two button text-white">VIEW</a>
                     </div>
                 </div>
             </div>

             @endif

             @if ($course->title == 'Target 2024 (Online)')
             <!--  Prelims (PYQ) -->
             <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">
                 <div class="single-features-light text-center">
                     <div>
                         <i class="base-color fas fa-book fa-3x"></i>
                         <h4>APSC PRACTICE TEST SERIES</h4>
                         <a href="{{ route('testseriesquiz.index', [$course->title ,"APSC"]) }}"
                             class=" btn color-two button text-white">VIEW</a>
                     </div>
                 </div>
             </div>
             <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">
                 <div class="single-features-light text-center">
                     <div>
                         <i class="base-color fas fa-book fa-3x"></i>
                         <h4>APSC FULL TEST SERIES</h4>
                         <a href="{{ route('quiz.index', $course->title) }}"
                             class=" btn color-two button text-white">VIEW</a>
                     </div>
                 </div>
             </div>

             @endif


             @if ($course->title == 'APSC PRELIMS TEST SERIES')
             <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">
                 <div class="single-features-light text-center">
                     <div>
                         <i class="base-color fas fa-book fa-3x"></i>
                         <h4>TEST </h4>
                         <a href="{{ route('testseriesquiz.index', [$course->title ,"APSC"]) }}"
                             class=" btn color-two button text-white">VIEW</a>
                     </div>
                 </div>
             </div>
             @else

             {{-- TEST --}}
             @if ($course->title != '90 DAYS BOOSTER COURSE' &&
             $course->title != '90 DAYS BOOSTER COURSE (OFFLINE)' &&
             $course->title != 'APSC 2023 INTERVIEW PREPARATION' &&
             $course->title != 'APSC TEST SERIES 2024' &&
             $course->title != 'APSC SELF STUDY COURSE' &&
             $course->title != 'Target 2024 (Online)' &&
             $course->title != 'Target 2024 (Offline)' &&
             $course->title != 'APSC 2024 MAINS PREPARATION' &&
             $course->title != 'DEMO OFFLINE COURSE')
             <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">
                 <div class="single-features-light text-center">
                     <div>
                         <i class="base-color fas fa-book fa-3x"></i>
                         <h4>WEEKLY TEST</h4>
                         <a href="{{ route('quiz.index', $course->title) }}"
                             class=" btn color-two button text-white">VIEW</a>
                     </div>
                 </div>
             </div>
             @elseif ($course->title != 'APSC 2023 INTERVIEW PREPARATION' && $course->title != 'APSC TEST SERIES 2024'
             && $course->title != 'APSC SELF STUDY COURSE' &&
             $course->title != 'Target 2024 (Online)' &&
             $course->title != 'Target 2024 (Offline)' &&
             $course->title != 'APSC 2024 MAINS PREPARATION' &&
             $course->title != 'DEMO OFFLINE COURSE')
             <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">
                 <div class="single-features-light text-center">
                     <div>
                         <i class="base-color fas fa-book fa-3x"></i>
                         <h4>DAILY CLASS TEST</h4>
                         <a href="{{ route('quiz.index', $course->title) }}"
                             class=" btn color-two button text-white">VIEW</a>
                     </div>
                 </div>
             </div>
             @endif


             @if ($course->title != 'APSC 2023 INTERVIEW PREPARATION' && $course->title != 'APSC SELF STUDY COURSE' && $course->title != 'APSC 2024 MAINS PREPARATION' &&
             $course->title != 'APSC TEST SERIES 2024')
             <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">
                 <div class="single-features-light text-center">
                     <div>
                         <i class="base-color fas fa-book fa-3x"></i>
                         <h4>STUDY PLAN</h4>
                         <a href="{{ route('user.apsc.advanced.batch(c).plan') }}"
                             class=" btn color-two button text-white">VIEW</a>
                     </div>
                 </div>
             </div>

             <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">
                 <div class="single-features-light text-center">
                     <div>
                         <i class="base-color fas fa-book fa-3x"></i>
                         <h4>ACS MATERIAL</h4>
                         <a href="{{ route('user.apsc.advanced.batch(c).material') }}"
                             class=" btn color-two button text-white">VIEW</a>
                     </div>
                 </div>
             </div>
             @endif


             @if ($course->title == 'APSC TEST SERIES 2024')
             <!--  Prelims (PYQ) -->
             <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">
                 <div class="single-features-light text-center">
                     <div>
                         <i class="base-color fas fa-book fa-3x"></i>
                         <h4>APSC PRACTICE TEST SERIES</h4>
                         <a href="{{ route('testseriesquiz.index', [$course->title ,"APSC"]) }}"
                             class=" btn color-two button text-white">VIEW</a>
                     </div>
                 </div>
             </div>
             <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">
                 <div class="single-features-light text-center">
                     <div>
                         <i class="base-color fas fa-book fa-3x"></i>
                         <h4>APSC FULL TEST SERIES</h4>
                         <a href="{{ route('quiz.index', $course->title) }}"
                             class=" btn color-two button text-white">VIEW</a>
                     </div>
                 </div>
             </div>
             <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">
                 <div class="single-features-light text-center">
                     <div>
                         <i class="base-color fas fa-book fa-3x"></i>
                         <h4>TIPS & TRICKS SESSION</h4>
                         <a href="{{ route('user.class.video.index', "UPSC PRELIMS BOOSTER TEST SERIES") }}"
                             class=" btn color-two button text-white">VIEW</a>
                     </div>
                 </div>
             </div>
             @endif

             @if ($course->title == 'APSC 2024 MAINS PREPARATION')
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

             {{-- DOWNLOAD --}}
             <!--<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">-->
             <!-- 2 -->
             <!--    <div class="single-features-light text-center">-->
             <!-- single features -->
             <!--        <div>-->
             <!--            <i class="base-color fas fa-book fa-3x"></i>-->
             <!--            <h4>STUDY PLAN</h4>-->

             <!--            @if ($course->title == 'APSC LIVE COURSE')-->
             <!--                <a href="{{ route('user.apsc.plan') }}"-->
             <!--                    class=" btn color-two button text-white">DOWNLOAD</a>-->
             <!--            @endif-->
             <!--            @if ($course->title == 'APSC BATCH (RECORDED)')-->
             <!--                <a href="{{ route('user.apsc.recorded.plan') }}"-->
             <!--                    class=" btn color-two button text-white">DOWNLOAD</a>-->
             <!--            @endif-->
             <!--            @if ($course->title == 'APSC ADVANCE BATCH(MORNING)')-->
             <!--                <a href="{{ route('user.apsc.mrng.plan') }}"-->
             <!--                    class=" btn color-two button text-white">DOWNLOAD</a>-->
             <!--            @endif-->
             <!--            @if ($course->title == 'APSC ADVANCED BATCH 2022')-->
             <!--                <a href="{{ route('user.apsc.advanced.batch.2022.plan') }}"-->
             <!--                    class=" btn color-two button text-white">DOWNLOAD</a>-->
             <!--            @endif-->
             <!--            @if ($course->title == 'APSC FOUNDATION BATCH 2023')-->
             <!--                <a href="{{ route('user.apsc.found.2023.plan') }}"-->
             <!--                    class=" btn color-two button text-white">DOWNLOAD</a>-->
             <!--            @endif-->
             <!--            @if ($course->title == 'APSC FOUNDATION BATCH')-->
             <!--                <a href="{{ route('user.apsc.found.plan') }}"-->
             <!--                    class=" btn color-two button text-white">DOWNLOAD</a>-->
             <!--            @endif-->
             <!--            @if ($course->title == 'APSC TARGET BATCH 2022')-->
             <!--                <a href="{{ route('user.apsc.target.batch.2022.plan') }}"-->
             <!--                    class=" btn color-two button text-white">DOWNLOAD</a>-->
             <!--            @endif-->
             <!--            @if ($course->title == 'APSC FOUNDATION BATCH 2023 (BATCH-2)')-->
             <!--                <a href="{{ route('user.apsc.foundation.2023.(batch-2).plan') }}"-->
             <!--                    class=" btn color-two button text-white">DOWNLOAD</a>-->
             <!--            @endif-->
             <!--            @if ($course->title == 'APSC ADVANCED BATCH 2022 (BATCH 2)')-->
             <!--                <a href="{{ route('user.apsc.advanced.2022.(batch2).plan') }}"-->
             <!--                    class=" btn color-two button text-white">DOWNLOAD</a>-->
             <!--            @endif-->
             <!--            @if ($course->title == 'APSC ADVANCED BATCH 2023')-->
             <!--                <a href="{{ route('user.apsc.advanced.batch.2023.plan') }}"-->
             <!--                    class=" btn color-two button text-white">DOWNLOAD</a>-->
             <!--            @endif-->
             <!--            @if ($course->title == 'APSC FOUNDATION BATCH 2024')-->
             <!--                <a href="{{ route('user.apsc.foundation.2024.plan') }}"-->
             <!--                    class=" btn color-two button text-white">DOWNLOAD</a>-->
             <!--            @endif-->
             <!--            @if ($course->title == 'APSC ADVANCED BATCH 2023 (A)')-->
             <!--                <a href="{{ route('user.apsc.advanced.batch.2023(A).plan') }}"-->
             <!--                    class=" btn color-two button text-white">DOWNLOAD</a>-->
             <!--            @endif-->
             <!--            @if ($course->title == 'APSC ADVANCED BATCH 2024')-->
             <!--                <a href="{{ route('user.apsc.advanced.batch.2024.plan') }}"-->
             <!--                    class=" btn color-two button text-white">DOWNLOAD</a>-->
             <!--            @endif-->
             <!--            @if ($course->title == 'APSC ADVANCED BATCH 2024 (A)')-->
             <!--                <a href="{{ route('user.apsc.advanced.batch.2024(A).plan') }}"-->
             <!--                    class=" btn color-two button text-white">DOWNLOAD</a>-->
             <!--            @endif-->
             <!--            @if ($course->title == 'APSC ADVANCED BATCH 2024 (B)')-->
             <!--                <a href="{{ route('user.apsc.advanced.batch.2024(B).plan') }}"-->
             <!--                    class=" btn color-two button text-white">DOWNLOAD</a>-->
             <!--            @endif-->
             <!--            @if ($course->title == 'APSC ADVANCED BATCH 2023 (B)')-->
             <!--                <a href="{{ route('user.apsc.advanced.batch.2023(B).plan') }}"-->
             <!--                    class=" btn color-two button text-white">DOWNLOAD</a>-->
             <!--            @endif-->
             <!--            @if ($course->title == 'APSC BOOSTER COURSE (C)')-->
             <!--                <a href="{{ route('user.apsc.booster.course(c).plan') }}"-->
             <!--                    class=" btn color-two button text-white">DOWNLOAD</a>-->
             <!--            @endif-->
             <!--            @if ($course->title == 'APSC ADVANCED BATCH (C)')-->
             <!--                <a href="{{ route('user.apsc.advanced.batch(c).plan') }}"-->
             <!--                    class=" btn color-two button text-white">DOWNLOAD</a>-->
             <!--            @endif-->
             <!--            @if ($course->title == 'APSC BOOSTER COURSE (D)')-->
             <!--                <a href="{{ route('user.apsc.booster.course(d).plan') }}"-->
             <!--                    class=" btn color-two button text-white">DOWNLOAD</a>-->
             <!--            @endif-->
             <!--            @if ($course->title == 'APSC BOOSTER COURSE (E)')-->
             <!--                <a href="{{ route('user.apsc.booster.course(d).plan') }}"-->
             <!--                    class=" btn color-two button text-white">DOWNLOAD</a>-->
             <!--            @endif-->
             <!--             @if ($course->title == 'APSC BOOSTER COURSE (F)')-->
             <!--                <a href="{{ route('user.apsc.booster.course(d).plan') }}"-->
             <!--                    class=" btn color-two button text-white">DOWNLOAD</a>-->
             <!--            @endif-->
             <!--            @if ($course->title == 'APSC BOOSTER COURSE (G)')-->
             <!--                <a href="{{ route('user.apsc.booster.course(d).plan') }}"-->
             <!--                    class=" btn color-two button text-white">DOWNLOAD</a>-->
             <!--            @endif-->
             <!--            @if ($course->title == 'APSC BOOSTER COURSE (H)')-->
             <!--                <a href="{{ route('user.apsc.booster.course(d).plan') }}"-->
             <!--                    class=" btn color-two button text-white">DOWNLOAD</a>-->
             <!--            @endif-->
             <!--            @if ($course->title == 'APSC BOOSTER COURSE (I)')-->
             <!--                <a href="{{ route('user.apsc.booster.course(d).plan') }}"-->
             <!--                    class=" btn color-two button text-white">DOWNLOAD</a>-->
             <!--            @endif-->
             <!--            @if ($course->title == 'APSC BOOSTER COURSE (J)')-->
             <!--                <a href="{{ route('user.apsc.booster.course(d).plan') }}"-->
             <!--                    class=" btn color-two button text-white">DOWNLOAD</a>-->
             <!--            @endif-->
             <!--            @if ($course->title == 'APSC BOOSTER COURSE (K)')-->
             <!--                <a href="{{ route('user.apsc.booster.course(d).plan') }}"-->
             <!--                    class=" btn color-two button text-white">DOWNLOAD</a>-->
             <!--            @endif-->
             <!--            @if ($course->title == 'APSC BOOSTER COURSE (L)')-->
             <!--                <a href="{{ route('user.apsc.booster.course(d).plan') }}"-->
             <!--                    class=" btn color-two button text-white">DOWNLOAD</a>-->
             <!--            @endif-->
             <!--APSC PRELIMS FOCUS 2022-->
             <!--            @if ($course->title == '90 DAYS BOOSTER COURSE')-->
             <!--                <a href="{{ route('user.apsc.prelims.focus.plan') }}"-->
             <!--                    class=" btn color-two button text-white">VIEW</a>-->
             <!--            @endif-->
             <!--            @if ($course->title == '90 DAYS BOOSTER COURSE (OFFLINE)')-->
             <!--                <a href="{{ route('user.90days.booster.course.offline.plan') }}"-->
             <!--                    class=" btn color-two button text-white">VIEW</a>-->
             <!--            @endif-->
             <!--            @if ($course->title == '20 DAYS FREE BOOSTER COURSE')-->
             <!--                <a href="{{ route('user.20.days.free.booster.course.plan') }}"-->
             <!--                    class=" btn color-two button text-white">VIEW</a>-->
             <!--            @endif-->
             <!--        </div>-->
             <!--    </div>-->
             <!-- end single features -->
             <!--</div>-->

             @if ($course->title != 'APSC TEST SERIES 2024' &&
             $course->title != 'APSC SELF STUDY COURSE' &&
             $course->title != 'Target 2024 (Online)' && $course->title != 'APSC 2024 MAINS PREPARATION' &&
             $course->title != 'Target 2024 (Offline)')
             <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">
                 <div class="single-features-light text-center">
                     <div>
                         <i class="base-color fab fa-leanpub fa-3x"></i>
                         <h4>Current Affairs</h4>
                         <a href="https://acsindiaias.com/current_affairs_2023" target="_blank"
                             class="btn color-two button text-white">VIEW</a>
                     </div>
                 </div>
             </div>
             @endif


             {{-- PREVIOUS QUESTION PAPER --}}
             @if ($course->title != '90 DAYS BOOSTER COURSE' &&
             $course->title != '90 DAYS BOOSTER COURSE (OFFLINE)' &&
             $course->title != '20 DAYS FREE BOOSTER COURSE' &&
             $course->title != 'APSC SELF STUDY COURSE' &&
             $course->title != 'APSC 2023 INTERVIEW PREPARATION' && $course->title != 'APSC 2024 MAINS PREPARATION' &&
             $course->title != 'APSC TEST SERIES 2024')

             <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">
                 <div class="single-features-light text-center">
                     <div>
                         <i class="base-color fas fa-book fa-3x"></i>
                         <h4>PREVIOUS YEAR QUESTION PAPER</h4>
                         <h6>(CHAPTERWISE)</h6>
                         <a href="{{ route('user.apsc.booster.course(c).paper') }}"
                             class=" btn color-two button text-white">VIEW</a>
                     </div>
                 </div>
             </div>

             <!--<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">-->
             <!-- 1 -->
             <!--    <div class="single-features-light text-center">-->
             <!-- single features -->
             <!--        <div>-->
             <!-- uses solid style -->
             <!--            <i class="base-color fas fa-book fa-3x"></i>-->
             <!--            <h4>PREVIOUS QUESTION PAPER</h4>-->
             <!--            @if ($course->title == 'APSC LIVE COURSE')-->
             <!--                <a href="{{ route('user.apsc.paper') }}"-->
             <!--                    class=" btn color-two button text-white">VIEW</a>-->
             <!--            @endif-->
             <!--            @if ($course->title == 'APSC BATCH (RECORDED)')-->
             <!--                <a href="{{ route('user.apsc.recorded.paper') }}"-->
             <!--                    class=" btn color-two button text-white">VIEW</a>-->
             <!--            @endif-->
             <!--            @if ($course->title == 'APSC ADVANCE BATCH(MORNING)')-->
             <!--                <a href="{{ route('user.apsc.mrng.paper') }}"-->
             <!--                    class=" btn color-two button text-white">VIEW</a>-->
             <!--            @endif-->
             <!--            @if ($course->title == 'APSC ADVANCED BATCH 2022')-->
             <!--                <a href="{{ route('user.apsc.advanced.batch.2022.paper') }}"-->
             <!--                    class=" btn color-two button text-white">VIEW</a>-->
             <!--            @endif-->
             <!--            @if ($course->title == 'APSC FOUNDATION BATCH 2023')-->
             <!--                <a href="{{ route('user.apsc.found.2023.paper') }}"-->
             <!--                    class=" btn color-two button text-white">VIEW</a>-->
             <!--            @endif-->
             <!--            @if ($course->title == 'APSC FOUNDATION BATCH')-->
             <!--                <a href="{{ route('user.apsc.found.paper') }}"-->
             <!--                    class=" btn color-two button text-white">VIEW</a>-->
             <!--            @endif-->
             <!--            @if ($course->title == 'APSC TARGET BATCH 2022')-->
             <!--                <a href="{{ route('user.apsc.target.batch.2022.paper') }}"-->
             <!--                    class=" btn color-two button text-white">DOWNLOAD</a>-->
             <!--            @endif-->
             <!--            @if ($course->title == 'APSC FOUNDATION BATCH 2023 (BATCH-2)')-->
             <!--                <a href="{{ route('user.apsc.foundation.(batch-2).2023.paper') }}"-->
             <!--                    class=" btn color-two button text-white">DOWNLOAD</a>-->
             <!--            @endif-->
             <!--            @if ($course->title == 'APSC ADVANCED BATCH 2022 (BATCH 2)')-->
             <!--                <a href="{{ route('user.apsc.advanced.2022.(batch2).paper') }}"-->
             <!--                    class=" btn color-two button text-white">DOWNLOAD</a>-->
             <!--            @endif-->
             <!--            @if ($course->title == 'APSC ADVANCED BATCH 2023')-->
             <!--                <a href="{{ route('user.apsc.advanced.batch.2023.paper') }}"-->
             <!--                    class=" btn color-two button text-white">DOWNLOAD</a>-->
             <!--            @endif-->
             <!--            @if ($course->title == 'APSC FOUNDATION BATCH 2024')-->
             <!--                <a href="{{ route('user.apsc.foundation.2024.paper') }}"-->
             <!--                    class=" btn color-two button text-white">DOWNLOAD</a>-->
             <!--            @endif-->
             <!--            @if ($course->title == 'APSC ADVANCED BATCH 2023 (A)')-->
             <!--                <a href="{{ route('user.apsc.advanced.batch.2023(A).paper') }}"-->
             <!--                    class=" btn color-two button text-white">DOWNLOAD</a>-->
             <!--            @endif-->
             <!--            @if ($course->title == 'APSC ADVANCED BATCH 2024')-->
             <!--                <a href="{{ route('user.apsc.advanced.batch.2024.paper') }}"-->
             <!--                    class=" btn color-two button text-white">DOWNLOAD</a>-->
             <!--            @endif-->
             <!--            @if ($course->title == 'APSC ADVANCED BATCH 2024 (A)')-->
             <!--                <a href="{{ route('user.apsc.advanced.batch.2024(A).paper') }}"-->
             <!--                    class=" btn color-two button text-white">DOWNLOAD</a>-->
             <!--            @endif-->
             <!--            @if ($course->title == 'APSC ADVANCED BATCH 2024 (B)')-->
             <!--                <a href="{{ route('user.apsc.advanced.batch.2024(B).paper') }}"-->
             <!--                    class=" btn color-two button text-white">DOWNLOAD</a>-->
             <!--            @endif-->
             <!--            @if ($course->title == 'APSC ADVANCED BATCH 2023 (B)')-->
             <!--                <a href="{{ route('user.apsc.advanced.batch.2023(B).paper') }}"-->
             <!--                    class=" btn color-two button text-white">DOWNLOAD</a>-->
             <!--            @endif-->
             <!--            @if ($course->title == 'APSC BOOSTER COURSE (C)')-->
             <!--                <a href="{{ route('user.apsc.booster.course(c).paper') }}"-->
             <!--                    class=" btn color-two button text-white">VIEW</a>-->
             <!--            @endif-->
             <!--            @if ($course->title == 'APSC ADVANCED BATCH (C)')-->
             <!--                <a href="{{ route('user.apsc.advanced.batch(c).paper') }}"-->
             <!--                    class=" btn color-two button text-white">VIEW</a>-->
             <!--            @endif-->
             <!--            @if ($course->title == 'APSC BOOSTER COURSE (D)')-->
             <!--                <a href="{{ route('user.apsc.booster.course(d).paper') }}"-->
             <!--                    class=" btn color-two button text-white">VIEW</a>-->
             <!--            @endif-->
             <!--            @if ($course->title == 'APSC BOOSTER COURSE (E)')-->
             <!--                <a href="{{ route('user.apsc.booster.course(d).paper') }}"-->
             <!--                    class=" btn color-two button text-white">VIEW</a>-->
             <!--            @endif-->
             <!--            @if ($course->title == 'APSC BOOSTER COURSE (F)')-->
             <!--                <a href="{{ route('user.apsc.booster.course(d).paper') }}"-->
             <!--                    class=" btn color-two button text-white">VIEW</a>-->
             <!--            @endif-->
             <!--            @if ($course->title == 'APSC BOOSTER COURSE (G)')-->
             <!--                <a href="{{ route('user.apsc.booster.course(g).paper') }}"-->
             <!--                    class=" btn color-two button text-white">VIEW</a>-->
             <!--            @endif-->
             <!--            @if ($course->title == 'APSC BOOSTER COURSE (H)')-->
             <!--            <a href="{{ route('user.apsc.booster.course(d).paper') }}"-->
             <!--                class=" btn color-two button text-white">DOWNLOAD</a>-->
             <!--            @endif-->
             <!--            @if ($course->title == 'APSC BOOSTER COURSE (I)')-->
             <!--            <a href="{{ route('user.apsc.booster.course(d).paper') }}"-->
             <!--                class=" btn color-two button text-white">DOWNLOAD</a>-->
             <!--            @endif-->

             <!--            @if ($course->title == 'APSC BOOSTER COURSE (J)')-->
             <!--            <a href="{{ route('user.apsc.booster.course(d).paper') }}"-->
             <!--                class=" btn color-two button text-white">DOWNLOAD</a>-->
             <!--            @endif-->
             <!--            @if ($course->title == 'APSC BOOSTER COURSE (K)')-->
             <!--                <a href="{{ route('user.apsc.booster.course(d).paper') }}"-->
             <!--                    class=" btn color-two button text-white">VIEW</a>-->
             <!--            @endif-->
             <!--            @if ($course->title == 'APSC BOOSTER COURSE (L)')-->
             <!--                <a href="{{ route('user.apsc.booster.course(g).paper') }}"-->
             <!--                    class=" btn color-two button text-white">VIEW</a>-->
             <!--            @endif-->


             <!--        </div>-->


             <!--    </div>-->
             <!-- end single features -->
             <!--</div>-->
             @elseif ($course->title != 'APSC 2023 INTERVIEW PREPARATION' && $course->title != 'APSC TEST SERIES 2024'
             && $course->title != 'APSC 2024 MAINS PREPARATION' && $course->title != 'APSC SELF STUDY COURSE')
             <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">
                 <div class="single-features-light text-center">
                     <div>
                         <i class="base-color fas fa-book fa-3x"></i>
                         <h4>UPSC PRELIMS (PYQ)</h4>
                         <a href="{{ route('user.apsc.prelims.focus.paper') }}"
                             class=" btn color-two button text-white">VIEW</a>
                     </div>
                 </div>
             </div>
             @endif

             @if ($course->title == 'APSC SELF STUDY COURSE')
             <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">
                 <div class="single-features-light text-center">
                     <div>
                         <i class="base-color fas fa-book fa-3x"></i>
                         <h4>MY STUDY ROOM</h4>
                         <a href="{{ route('digipedia.self.study.apsc.index') }}"
                             class=" btn color-two button text-white">View</a>
                     </div>
                 </div>
             </div>
             <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">
                 <div class="single-features-light text-center">
                     <div>
                         <i class="base-color fas fa-book fa-3x"></i>
                         <h4>TEST SERIES</h4>
                         <a href="{{route('testseriesquiz.index',[$course->title ,"APSC"])}}"
                             class=" btn color-two button text-white">VIEW</a>
                     </div>
                 </div>
             </div>
             @endif

             <!--{{-- TEST SERIES --}}-->
             <!--@if ($course->title != '90 DAYS BOOSTER COURSE' && $course->title != '90 DAYS BOOSTER COURSE (OFFLINE)')-->
             <!--    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">-->
             <!-- 2 -->
             <!--        <div class="single-features-light text-center">-->
             <!-- single features -->
             <!--            <div>-->
             <!--                <i class="base-color fas fa-book fa-3x"></i>-->
             <!--                <h4>TEST SERIES</h4>-->
             <!--                @if ($course->title == 'APSC LIVE COURSE')-->
             <!--                    <a href="{{ route('user.apsc.test', $course->title) }}"-->
             <!--                        class=" btn color-two button text-white">VIEW</a>-->
             <!--                @endif-->
             <!--                @if ($course->title == 'APSC BATCH (RECORDED)')-->
             <!--                    <a href="{{ route('user.apsc.recorded.test', $course->title) }}"-->
             <!--                        class=" btn color-two button text-white">VIEW</a>-->
             <!--                @endif-->
             <!--                @if ($course->title == 'APSC ADVANCE BATCH(MORNING)')-->
             <!--                    <a href="{{ route('user.apsc.mrng.test', $course->title) }}"-->
             <!--                        class=" btn color-two button text-white">VIEW</a>-->
             <!--                @endif-->
             <!--                @if ($course->title == 'APSC ADVANCED BATCH 2022')-->
             <!--                    <a href="{{ route('user.apsc.advanced.batch.2022.testmaterial', $course->title) }}"-->
             <!--                        class=" btn color-two button text-white">VIEW</a>-->
             <!--                @endif-->
             <!--                @if ($course->title == 'APSC FOUNDATION BATCH 2023')-->
             <!--                    <a href="{{ route('user.apsc.found.2023.test', $course->title) }}"-->
             <!--                        class=" btn color-two button text-white">VIEW</a>-->
             <!--                @endif-->
             <!--                @if ($course->title == 'APSC FOUNDATION BATCH')-->
             <!--                    <a href="{{ route('user.apsc.found.test', $course->title) }}"-->
             <!--                        class=" btn color-two button text-white">VIEW</a>-->
             <!--                @endif-->
             <!--                @if ($course->title == 'APSC TARGET BATCH 2022')-->
             <!--                    <a href="{{ route('user.apsc.target.batch.2022.testmaterial', $course->title) }}"-->
             <!--                        class=" btn color-two button text-white">VIEW</a>-->
             <!--                @endif-->
             <!--                @if ($course->title == 'APSC FOUNDATION BATCH 2023 (BATCH-2)')-->
             <!--                    <a href="{{ route('user.apsc.foundation.2023.(batch-2).test', $course->title) }}"-->
             <!--                        class=" btn color-two button text-white">VIEW</a>-->
             <!--                @endif-->
             <!--                @if ($course->title == 'APSC ADVANCED BATCH 2022 (BATCH 2)')-->
             <!--                    <a href="{{ route('user.apsc.advanced.2022.(batch2).test', $course->title) }}"-->
             <!--                        class=" btn color-two button text-white">VIEW</a>-->
             <!--                @endif-->
             <!--                @if ($course->title == 'APSC ADVANCED BATCH 2023')-->
             <!--                    <a href="{{ route('user.apsc.advanced.batch.2023.test', $course->title) }}"-->
             <!--                        class=" btn color-two button text-white">VIEW</a>-->
             <!--                @endif-->
             <!--                @if ($course->title == 'APSC FOUNDATION BATCH 2024')-->
             <!--                    <a href="{{ route('user.apsc.foundation.2024.test', $course->title) }}"-->
             <!--                        class=" btn color-two button text-white">VIEW</a>-->
             <!--                @endif-->
             <!--                @if ($course->title == 'APSC ADVANCED BATCH 2023 (A)')-->
             <!--                    <a href="{{ route('user.apsc.advanced.batch.2023(A).test', $course->title) }}"-->
             <!--                        class=" btn color-two button text-white">View</a>-->
             <!--                @endif-->
             <!--                @if ($course->title == 'APSC ADVANCED BATCH 2024')-->
             <!--                    <a href="{{ route('user.apsc.advanced.batch.2024.test', $course->title) }}"-->
             <!--                        class=" btn color-two button text-white">View</a>-->
             <!--                @endif-->
             <!--                @if ($course->title == 'APSC ADVANCED BATCH 2024 (A)')-->
             <!--                    <a href="{{ route('user.apsc.advanced.batch.2024(A).test', $course->title) }}"-->
             <!--                        class=" btn color-two button text-white">DOWNLOAD</a>-->
             <!--                @endif-->
             <!--                @if ($course->title == 'APSC ADVANCED BATCH 2024 (B)')-->
             <!--                    <a href="{{ route('user.apsc.advanced.batch.2024(B).test', $course->title) }}"-->
             <!--                        class=" btn color-two button text-white">DOWNLOAD</a>-->
             <!--                @endif-->
             <!--                @if ($course->title == 'APSC ADVANCED BATCH 2023 (B)')-->
             <!--                    <a href="{{ route('user.apsc.advanced.batch.2023(B).test', $course->title) }}"-->
             <!--                        class=" btn color-two button text-white">DOWNLOAD</a>-->
             <!--                @endif-->
             <!--                @if ($course->title == 'APSC BOOSTER COURSE (C)')-->
             <!--                    <a href="{{ route('user.apsc.booster.course(c).test', $course->title) }}"-->
             <!--                        class=" btn color-two button text-white">VIEW</a>-->
             <!--                @endif-->
             <!--                @if ($course->title == 'APSC ADVANCED BATCH (C)')-->
             <!--                    <a href="{{ route('user.apsc.advanced.batch(c).test', $course->title) }}"-->
             <!--                        class=" btn color-two button text-white">VIEW</a>-->
             <!--                @endif-->
             <!--                @if ($course->title == 'APSC BOOSTER COURSE (D)')-->
             <!--                    <a href="{{ route('user.apsc.booster.course(d).test', $course->title) }}"-->
             <!--                        class=" btn color-two button text-white">VIEW</a>-->
             <!--                @endif-->
             <!--                @if ($course->title == 'APSC BOOSTER COURSE (E)')-->
             <!--                    <a href="{{ route('user.apsc.booster.course(d).test', $course->title) }}"-->
             <!--                        class=" btn color-two button text-white">VIEW</a>-->

             <!--                @endif-->
             <!--                @if ($course->title == 'APSC BOOSTER COURSE (F)')-->
             <!--                    <a href="{{ route('user.apsc.booster.course(d).test', $course->title) }}"-->
             <!--                        class=" btn color-two button text-white">VIEW</a>-->

             <!--                @endif-->
             <!--                @if ($course->title == 'APSC BOOSTER COURSE (G)')-->
             <!--                    <a href="{{ route('user.apsc.booster.course(d).test', $course->title) }}"-->
             <!--                        class=" btn color-two button text-white">VIEW</a>-->

             <!--                @endif-->
             <!--                @if ($course->title == 'APSC BOOSTER COURSE (H)')-->
             <!--                    <a href="{{ route('user.apsc.booster.course(g).test', $course->title) }}"-->
             <!--                        class=" btn color-two button text-white">VIEW</a>-->

             <!--                @endif-->
             <!--                @if ($course->title == 'APSC BOOSTER COURSE (I)')-->
             <!--                    <a href="{{ route('user.apsc.booster.course(g).test', $course->title) }}"-->
             <!--                        class=" btn color-two button text-white">VIEW</a>-->

             <!--                @endif-->
             <!--                @if ($course->title == 'APSC BOOSTER COURSE (J)')-->
             <!--                    <a href="{{ route('user.apsc.booster.course(g).test', $course->title) }}"-->
             <!--                        class=" btn color-two button text-white">VIEW</a>-->

             <!--                @endif-->
             <!--                @if ($course->title == 'APSC BOOSTER COURSE (K)')-->
             <!--                    <a href="{{ route('user.apsc.booster.course(g).test', $course->title) }}"-->
             <!--                        class=" btn color-two button text-white">VIEW</a>-->

             <!--                @endif-->
             <!--                @if ($course->title == 'APSC BOOSTER COURSE (L)')-->
             <!--                    <a href="{{ route('user.apsc.booster.course(g).test', $course->title) }}"-->
             <!--                        class=" btn color-two button text-white">VIEW</a>-->

             <!--                @endif-->
             <!--                @if ($course->title == '90 days booster course(offline)')-->
             <!--                    <a href="{{ route('user.90days.booster.course.offline.test', $course->title) }}"-->
             <!--                        class=" btn color-two button text-white">VIEW</a>-->
             <!--                @endif-->
             <!--                @if ($course->title == '20 DAYS FREE BOOSTER COURSE')-->
             <!--                    <a href="{{ route('user.20.days.free.booster.course.test', $course->title) }}"-->
             <!--                        class=" btn color-two button text-white">VIEW</a>-->
             <!--                @endif-->

             <!--            </div>-->
             <!--        </div>-->
             <!--    </div>-->
             <!--@endif-->

             {{-- RECORDED CLASSES --}}
             @if ($course->title != 'APSC 2023 INTERVIEW PREPARATION' && $course->title != 'APSC 2024 MAINS PREPARATION' && $course->title != 'APSC TEST SERIES 2024')

             <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">
                 <!-- 2 -->
                 <div class="single-features-light text-center">
                     <!-- single features -->
                     <div>
                         <i class="base-color fas fa-book fa-3x"></i>
                         <h4>RECORDED CLASSES</h4>
                         @if ($course->title == 'APSC LIVE COURSE')
                         <a href="{{ route('user.class.video.index', $course->title) }}"
                             class=" btn color-two button text-white">VIEW</a>
                         @endif
                         @if ($course->title == 'APSC BATCH (RECORDED)')
                         <a href="{{ route('user.class.video.index', $course->title) }}"
                             class=" btn color-two button text-white">VIEW</a>
                         @endif
                         @if ($course->title == 'APSC ADVANCE BATCH(MORNING)')
                         <a href="{{ route('user.class.video.index', $course->title) }}"
                             class=" btn color-two button text-white">View</a>
                         @endif
                         @if ($course->title == 'APSC ADVANCED BATCH 2022')
                         <a href="{{ route('user.new.video', $course->title) }}"
                             class=" btn color-two button text-white">View</a>
                         @endif
                         @if ($course->title == 'APSC FOUNDATION BATCH 2023')
                         <a href="{{ route('user.new.video', $course->title) }}"
                             class=" btn color-two button text-white">View</a>
                         @endif
                         @if ($course->title == 'APSC FOUNDATION BATCH')
                         <a href="{{ route('user.class.video.index', $course->title) }}"
                             class=" btn color-two button text-white">View</a>
                         @endif
                         @if ($course->title == 'APSC TARGET BATCH 2022')
                         <a href="{{ route('user.new.video', $course->title) }}"
                             class=" btn color-two button text-white">View</a>
                         @endif
                         @if ($course->title == 'APSC FOUNDATION BATCH 2023 (BATCH-2)')
                         <a href="{{ route('user.new.video', $course->title) }}"
                             class=" btn color-two button text-white">View</a>
                         @endif
                         @if ($course->title == 'APSC ADVANCED BATCH 2022 (BATCH 2)')
                         <a href="{{ route('user.new.video', $course->title) }}"
                             class=" btn color-two button text-white">View</a>
                         @endif
                         @if ($course->title == 'APSC ADVANCED BATCH 2023')
                         <a href="{{ route('user.new.video', $course->title) }}"
                             class=" btn color-two button text-white">View</a>
                         @endif
                         @if ($course->title == 'APSC FOUNDATION BATCH 2024')
                         <a href="{{ route('user.new.video', $course->title) }}"
                             class=" btn color-two button text-white">View</a>
                         @endif
                         @if ($course->title == 'APSC ADVANCED BATCH 2023 (A)')
                         <a href="{{ route('user.new.video', $course->title) }}"
                             class=" btn color-two button text-white">View</a>
                         @endif
                         @if ($course->title == 'APSC ADVANCED BATCH 2024')
                         <a href="{{ route('user.new.video', $course->title) }}"
                             class=" btn color-two button text-white">View</a>
                         @endif
                         @if ($course->title == 'APSC ADVANCED BATCH 2024 (A)')
                         <a href="{{ route('user.new.video', $course->title) }}"
                             class=" btn color-two button text-white">DOWNLOAD</a>
                         @endif
                         @if ($course->title == 'APSC ADVANCED BATCH 2024 (B)')
                         <a href="{{ route('user.new.video', $course->title) }}"
                             class=" btn color-two button text-white">DOWNLOAD</a>
                         @endif
                         @if ($course->title == 'APSC ADVANCED BATCH 2023 (B)')
                         <a href="{{ route('user.new.video', $course->title) }}"
                             class=" btn color-two button text-white">DOWNLOAD</a>
                         @endif
                         @if ($course->title == 'APSC BOOSTER COURSE (C)')
                         <a href="{{ route('user.new.video', $course->title) }}"
                             class=" btn color-two button text-white">VIEW</a>
                         @endif
                         @if ($course->title == 'APSC ADVANCED BATCH (C)')
                         <a href="{{ route('user.new.video', $course->title) }}"
                             class=" btn color-two button text-white">VIEW</a>
                         @endif
                         @if ($course->title == 'APSC BOOSTER COURSE (D)')
                         <a href="{{ route('user.new.video', $course->title) }}"
                             class=" btn color-two button text-white">VIEW</a>
                         @endif
                         @if ($course->title == 'APSC BOOSTER COURSE (E)')
                         <a href="{{ route('user.new.video', $course->title) }}"
                             class=" btn color-two button text-white">VIEW</a>
                         @endif
                         @if ($course->title == 'APSC BOOSTER COURSE (F)')
                         <a href="{{ route('user.new.video', $course->title) }}"
                             class=" btn color-two button text-white">VIEW</a>
                         @endif
                         @if ($course->title == 'APSC BOOSTER COURSE (G)')
                         <a href="{{ route('user.new.video', $course->title) }}"
                             class=" btn color-two button text-white">VIEW</a>
                         @endif
                         @if ($course->title == 'APSC BOOSTER COURSE (H)')
                         <a href="{{ route('user.new.video', $course->title) }}"
                             class=" btn color-two button text-white">VIEW</a>
                         @endif
                         @if ($course->title == 'APSC BOOSTER COURSE (I)')
                         <a href="{{ route('user.new.video', $course->title) }}"
                             class=" btn color-two button text-white">VIEW</a>
                         @endif
                         @if ($course->title == 'APSC BOOSTER COURSE (J)')
                         <a href="{{ route('user.new.video', $course->title) }}"
                             class=" btn color-two button text-white">VIEW</a>
                         @endif
                         @if ($course->title == 'APSC BOOSTER COURSE (K)')
                         <a href="{{ route('user.new.video', $course->title) }}"
                             class=" btn color-two button text-white">VIEW</a>
                         @endif
                         @if ($course->title == 'APSC BOOSTER COURSE (L)')
                         <a href="{{ route('user.new.video', $course->title) }}"
                             class=" btn color-two button text-white">VIEW</a>
                         @endif
                         @if ($course->title == 'APSC BOOSTER COURSE (M)')
                         <a href="{{ route('user.new.video', $course->title) }}"
                             class=" btn color-two button text-white">VIEW</a>
                         @endif
                         @if ($course->title == 'APSC BOOSTER COURSE (N)')
                         <a href="{{ route('user.new.video', $course->title) }}"
                             class=" btn color-two button text-white">VIEW</a>
                         @endif
                         @if ($course->title == 'APSC BOOSTER COURSE (O)')
                         <a href="{{ route('user.new.video', $course->title) }}"
                             class=" btn color-two button text-white">VIEW</a>
                         @endif
                         @if ($course->title == 'APSC BOOSTER COURSE (P)')
                         <a href="{{ route('user.new.video', $course->title) }}"
                             class=" btn color-two button text-white">VIEW</a>
                         @endif
                         @if ($course->title == 'APSC BOOSTER COURSE (Q)')
                         <a href="{{ route('user.new.video', $course->title) }}"
                             class=" btn color-two button text-white">VIEW</a>
                         @endif

                         @if ($course->title == '90 DAYS BOOSTER COURSE')
                         <a href="{{ route('user.new.video', $course->title) }}"
                             class=" btn color-two button text-white">VIEW</a>
                         @endif
                         @if ($course->title == '90 DAYS BOOSTER COURSE (OFFLINE)')
                         <a href="{{ route('user.new.video', $course->title) }}"
                             class=" btn color-two button text-white">VIEW</a>
                         @endif
                         @if ($course->title == '20 DAYS FREE BOOSTER COURSE')
                         <a href="{{ route('user.new.video', $course->title) }}"
                             class=" btn color-two button text-white">VIEW</a>
                         @endif
                         @if ($course->title == 'GHY BOOSTER COURSE (G)')
                         <a href="{{ route('user.new.video', $course->title) }}"
                             class=" btn color-two button text-white">VIEW</a>
                         @endif
                         @if ($course->title == 'DIBRU OFFLINE (M)')
                         <a href="{{ route('user.new.video', $course->title) }}"
                             class=" btn color-two button text-white">VIEW</a>
                         @endif
                         @if ($course->title == 'GHY OFFLINE (M)')
                         <a href="{{ route('user.new.video', $course->title) }}"
                             class=" btn color-two button text-white">VIEW</a>
                         @endif
                         @if ($course->title == 'APSC BOOSTER COURSE (R)')
                         <a href="{{ route('user.new.video', $course->title) }}"
                             class=" btn color-two button text-white">VIEW</a>
                         @endif
                         @if ($course->title == 'APSC BOOSTER COURSE (S)')
                         <a href="{{ route('user.new.video', $course->title) }}"
                             class=" btn color-two button text-white">VIEW</a>
                         @endif
                         @if ($course->title == 'APSC BOOSTER COURSE (S_1)')
                         <a href="{{ route('user.new.video', $course->title) }}"
                             class=" btn color-two button text-white">VIEW</a>
                         @endif
                         @if ($course->title == 'APSC BOOSTER COURSE (T)')
                         <a href="{{ route('user.new.video', $course->title) }}"
                             class=" btn color-two button text-white">VIEW</a>
                         @endif
                         @if ($course->title == 'APSC BOOSTER COURSE (U)')
                         <a href="{{ route('user.new.video', $course->title) }}"
                             class=" btn color-two button text-white">VIEW</a>
                         @endif
                         @if ($course->title == 'APSC FEB 2024 COURSE (MRNG)')
                         <a href="{{ route('user.new.video', $course->title) }}"
                             class=" btn color-two button text-white">VIEW</a>
                         @endif
                         @if ($course->title == 'APSC BOOSTER COURSE (W)')
                         <a href="{{ route('user.new.video', $course->title) }}"
                             class=" btn color-two button text-white">VIEW</a>
                         @endif
                         @if ($course->title == 'Target 2024 (Offline)')
                         <a href="{{ route('user.new.video', $course->title) }}"
                             class=" btn color-two button text-white">VIEW</a>
                         @endif
                         @if ($course->title == 'Target 2024 (Online)')
                         <a href="{{ route('user.new.video', $course->title) }}"
                             class=" btn color-two button text-white">VIEW</a>
                         @endif
                         @if ($course->title == 'APSC BOOSTER COURSE (X-evng)')
                         <a href="{{ route('user.new.video', $course->title) }}"
                             class=" btn color-two button text-white">VIEW</a>
                         @endif
                         @if ($course->title == 'APSC SELF STUDY COURSE')
                         <a href="{{ route('user.new.video', $course->title) }}"
                             class=" btn color-two button text-white">VIEW</a>
                         @endif
                         @if ($course->title == 'APSC MAR 2024 COURSE (Evng)')
                         <a href="{{ route('user.new.video', $course->title) }}"
                             class=" btn color-two button text-white">VIEW</a>
                         @endif
                     </div>
                 </div>
                 <!-- end single features  -->
             </div>
             @endif
             @if ($course->title != 'APSC 2023 INTERVIEW PREPARATION' && $course->title != 'APSC 2024 MAINS PREPARATION' && $course->title != 'APSC TEST SERIES 2024' &&
             $course->title != 'APSC SELF STUDY COURSE')
             <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">
                 <div class="single-features-light text-center">
                     <!-- single features -->
                     <div>
                         <i class="base-color fas fa-book fa-3x"></i>
                         <h4>PPTS</h4>
                         <a href="{{ route('user.apsc.advanced.batch(c).classppt') }}"
                             class=" btn color-two button text-white">View</a>
                     </div>
                 </div>
             </div>
             @endif

             @if ($course->title != '90 DAYS BOOSTER COURSE' && $course->title != '20 DAYS FREE BOOSTER COURSE' &&
             $course->title != 'APSC TEST SERIES 2024' && $course->title != 'APSC 2024 MAINS PREPARATION' &&
             $course->title != 'APSC 2023 INTERVIEW PREPARATION' && $course->title != 'APSC SELF STUDY COURSE')
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
             @endif

             <!--<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">-->
             <!--    <div class="single-features-light text-center">-->
             <!-- single features -->
             <!--        <div>-->
             <!--            <i class="base-color fas fa-book fa-3x"></i>-->
             <!--            <h4>MAINS (PYQ)</h4>-->
             <!--            <a href="{{ route('maindocuments') }}"-->
             <!--                class=" btn color-two button text-white">View</a>-->
             <!--        </div>-->
             <!--    </div>-->
             <!--</div>-->

             <!--@if ($course->title == 'APSC BOOSTER COURSE (D)')-->
             <!--    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">-->
             <!--        <div class="single-features-light text-center">-->
             <!-- single features -->
             <!--            <div>-->
             <!--                <i class="base-color fas fa-book fa-3x"></i>-->
             <!--                <h4>PPTS</h4>-->
             <!--                <a href="{{ route('user.apsc.advanced.batch(c).classppt') }}"-->
             <!--                    class=" btn color-two button text-white">View</a>-->
             <!--            </div>-->
             <!--        </div>-->
             <!--    </div>-->
             <!--@endif-->
             <!--@if ($course->title == 'APSC BOOSTER COURSE (E)')-->
             <!--    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">-->
             <!--        <div class="single-features-light text-center">-->
             <!-- single features -->
             <!--            <div>-->
             <!--                <i class="base-color fas fa-book fa-3x"></i>-->
             <!--                <h4>PPTS</h4>-->
             <!--                <a href="{{ route('user.apsc.advanced.batch(c).classppt') }}"-->
             <!--                    class=" btn color-two button text-white">View</a>-->
             <!--            </div>-->
             <!--        </div>-->
             <!--    </div>-->
             <!--@endif-->
             <!--@if ($course->title == 'APSC BOOSTER COURSE (F)')-->
             <!--    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">-->
             <!--        <div class="single-features-light text-center">-->
             <!-- single features -->
             <!--            <div>-->
             <!--                <i class="base-color fas fa-book fa-3x"></i>-->
             <!--                <h4>PPTS</h4>-->
             <!--                <a href="{{ route('user.apsc.advanced.batch(c).classppt') }}"-->
             <!--                    class=" btn color-two button text-white">View</a>-->
             <!--            </div>-->
             <!--        </div>-->
             <!--    </div>-->
             <!--@endif-->
             <!--@if ($course->title == 'APSC BOOSTER COURSE (G)')-->
             <!--    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">-->
             <!--        <div class="single-features-light text-center">-->
             <!-- single features -->
             <!--            <div>-->
             <!--                <i class="base-color fas fa-book fa-3x"></i>-->
             <!--                <h4>PPTS</h4>-->
             <!--                <a href="{{ route('user.apsc.advanced.batch(c).classppt') }}"-->
             <!--                    class=" btn color-two button text-white">View</a>-->
             <!--            </div>-->
             <!--        </div>-->
             <!--    </div>-->
             <!--@endif-->
             <!--@if ($course->title == 'APSC BOOSTER COURSE (H)')-->
             <!--    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">-->
             <!--        <div class="single-features-light text-center">-->
             <!-- single features -->
             <!--            <div>-->
             <!--                <i class="base-color fas fa-book fa-3x"></i>-->
             <!--                <h4>PPTS</h4>-->
             <!--                <a href="{{ route('user.apsc.advanced.batch(c).classppt') }}"-->
             <!--                    class=" btn color-two button text-white">View</a>-->
             <!--            </div>-->
             <!--        </div>-->
             <!--    </div>-->
             <!--@endif-->
             <!--@if ($course->title == 'APSC BOOSTER COURSE (I)')-->
             <!--    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">-->
             <!--        <div class="single-features-light text-center">-->
             <!-- single features -->
             <!--            <div>-->
             <!--                <i class="base-color fas fa-book fa-3x"></i>-->
             <!--                <h4>PPTS</h4>-->
             <!--                <a href="{{ route('user.apsc.advanced.batch(c).classppt') }}"-->
             <!--                    class=" btn color-two button text-white">View</a>-->
             <!--            </div>-->
             <!--        </div>-->
             <!--    </div>-->
             <!--@endif-->

             <!--@if ($course->title == '90 DAYS BOOSTER COURSE')-->
             <!--    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">-->
             <!--        <div class="single-features-light text-center">-->
             <!-- single features -->
             <!--            <div>-->
             <!--                <i class="base-color fas fa-book fa-3x"></i>-->
             <!--                <h4>PPTS</h4>-->
             <!--                <a href="{{ route('user.apsc.advanced.batch(c).classppt') }}"-->
             <!--                    class=" btn color-two button text-white">View</a>-->
             <!--            </div>-->
             <!--        </div>-->
             <!--    </div>-->
             <!--@endif-->
             <!--@if ($course->title == '90 DAYS BOOSTER COURSE (OFFLINE)')-->
             <!--    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">-->
             <!--        <div class="single-features-light text-center">-->
             <!--            <div>-->
             <!--                <i class="base-color fas fa-book fa-3x"></i>-->
             <!--                <h4>PPTS</h4>-->
             <!--                <a href="{{ route('user.apsc.advanced.batch(c).classppt') }}"-->
             <!--                    class=" btn color-two button text-white">View</a>-->
             <!--            </div>-->
             <!--        </div>-->
             <!--    </div>-->
             <!--@endif-->
             <!--@if ($course->title == '20 DAYS FREE BOOSTER COURSE')-->
             <!--    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">-->
             <!--        <div class="single-features-light text-center">-->
             <!--            <div>-->
             <!--                <i class="base-color fas fa-book fa-3x"></i>-->
             <!--                <h4>PPTS</h4>-->
             <!--                <a href="{{ route('user.apsc.advanced.batch(c).classppt') }}"-->
             <!--                    class=" btn color-two button text-white">View</a>-->
             <!--            </div>-->
             <!--        </div>-->
             <!--    </div>-->
             <!--@endif-->
             <!--@if ($course->title == 'APSC ADVANCED BATCH 2024 (B)')-->
             <!--    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">-->
             <!--        <div class="single-features-light text-center">-->
             <!-- single features -->
             <!--            <div>-->
             <!--                <i class="base-color fas fa-book fa-3x"></i>-->
             <!--                <h4>PPTS</h4>-->
             <!--                <a href="{{ route('user.apsc.advanced.batch(c).classppt') }}"-->
             <!--                    class=" btn color-two button text-white">View</a>-->
             <!--            </div>-->
             <!--        </div>-->
             <!--    </div>-->
             <!--@endif-->
             <!--@if ($course->title == 'APSC ADVANCED BATCH 2023 (B)')-->
             <!--    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">-->
             <!--        <div class="single-features-light text-center">-->
             <!-- single features -->
             <!--            <div>-->
             <!--                <i class="base-color fas fa-book fa-3x"></i>-->
             <!--                <h4>PPTS</h4>-->
             <!--                <a href="{{ route('user.apsc.advanced.batch(c).classppt') }}"-->
             <!--                    class=" btn color-two button text-white">View</a>-->
             <!--            </div>-->
             <!--        </div>-->
             <!--    </div>-->
             <!--@endif-->
             <!--@if ($course->title == 'APSC BOOSTER COURSE (C)')-->
             <!--    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">-->
             <!--        <div class="single-features-light text-center">-->
             <!-- single features -->
             <!--            <div>-->
             <!--                <i class="base-color fas fa-book fa-3x"></i>-->
             <!--                <h4>PPTS</h4>-->
             <!--                <a href="{{ route('user.apsc.advanced.batch(c).classppt') }}"-->
             <!--                    class=" btn color-two button text-white">View</a>-->
             <!--            </div>-->
             <!--        </div>-->
             <!--    </div>-->
             <!--@endif-->
             <!--@if ($course->title == 'APSC ADVANCED BATCH (C)')-->
             <!--    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">-->
             <!--        <div class="single-features-light text-center">-->
             <!-- single features -->
             <!--            <div>-->
             <!--                <i class="base-color fas fa-book fa-3x"></i>-->
             <!--                <h4>PPTS</h4>-->
             <!--                <a href="{{ route('user.apsc.advanced.batch(c).classppt') }}"-->
             <!--                    class=" btn color-two button text-white">View</a>-->
             <!--            </div>-->
             <!--        </div>-->
             <!--    </div>-->
             <!--@endif-->
             <!--@if ($course->title == 'APSC LIVE COURSE')-->
             <!--    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">-->
             <!--        <div class="single-features-light text-center">-->
             <!-- single features -->
             <!--            <div>-->
             <!--                <i class="base-color fas fa-book fa-3x"></i>-->
             <!--                <h4>PPTS</h4>-->
             <!--                <a href="{{ route('user.apsc.advanced.batch(c).classppt') }}"-->
             <!--                    class=" btn color-two button text-white">View</a>-->
             <!--            </div>-->
             <!--        </div>-->
             <!--    </div>-->
             <!--@endif-->
             <!--@if ($course->title == 'APSC ADVANCE BATCH(MORNING)')-->
             <!--    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">-->
             <!--        <div class="single-features-light text-center">-->
             <!-- single features -->
             <!--            <div>-->
             <!--                <i class="base-color fas fa-book fa-3x"></i>-->
             <!--                <h4>PPTS</h4>-->
             <!--                <a href="{{ route('user.apsc.advanced.batch(c).classppt') }}"-->
             <!--                    class=" btn color-two button text-white">View</a>-->
             <!--            </div>-->
             <!--        </div>-->
             <!--    </div>-->
             <!--@endif-->
             <!--@if ($course->title == 'APSC ADVANCED BATCH 2022')-->
             <!--    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">-->
             <!--        <div class="single-features-light text-center">-->
             <!-- single features -->
             <!--            <div>-->
             <!--                <i class="base-color fas fa-book fa-3x"></i>-->
             <!--                <h4>PPTS</h4>-->
             <!--                <a href="{{ route('user.apsc.advanced.batch(c).classppt') }}"-->
             <!--                    class=" btn color-two button text-white">View</a>-->
             <!--            </div>-->
             <!--        </div>-->
             <!--    </div>-->
             <!--@endif-->

             <!--@if ($course->title == 'APSC BATCH (RECORDED)')-->
             <!--    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">-->
             <!--        <div class="single-features-light text-center">-->
             <!-- single features -->
             <!--            <div>-->
             <!--                <i class="base-color fas fa-book fa-3x"></i>-->
             <!--                <h4>PPTS</h4>-->
             <!--                <a href="{{ route('user.apsc.advanced.batch(c).classppt') }}"-->
             <!--                    class=" btn color-two button text-white">View</a>-->
             <!--            </div>-->
             <!--        </div>-->
             <!--    </div>-->
             <!--@endif-->
             <!--@if ($course->title == 'APSC FOUNDATION BATCH 2023')-->
             <!--    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">-->
             <!--        <div class="single-features-light text-center">-->
             <!-- single features -->
             <!--            <div>-->
             <!--                <i class="base-color fas fa-book fa-3x"></i>-->
             <!--                <h4>PPTS</h4>-->
             <!--                <a href="{{ route('user.apsc.advanced.batch(c).classppt') }}"-->
             <!--                    class=" btn color-two button text-white">View</a>-->
             <!--            </div>-->
             <!--        </div>-->
             <!--    </div>-->
             <!--@endif-->
             <!--@if ($course->title == 'APSC TARGET BATCH 2022')-->
             <!--    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">-->
             <!--        <div class="single-features-light text-center">-->
             <!-- single features -->
             <!--            <div>-->
             <!--                <i class="base-color fas fa-book fa-3x"></i>-->
             <!--                <h4>PPTS</h4>-->
             <!--                <a href="{{ route('user.apsc.advanced.batch(c).classppt') }}"-->
             <!--                    class=" btn color-two button text-white">View</a>-->
             <!--            </div>-->
             <!--        </div>-->
             <!--    </div>-->
             <!--@endif-->
             <!--@if ($course->title == 'APSC ADVANCED BATCH 2022 (BATCH 2)')-->
             <!--    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">-->
             <!--        <div class="single-features-light text-center">-->
             <!-- single features -->
             <!--            <div>-->
             <!--                <i class="base-color fas fa-book fa-3x"></i>-->
             <!--                <h4>PPTS</h4>-->
             <!--                <a href="{{ route('user.apsc.advanced.batch(c).classppt') }}"-->
             <!--                    class=" btn color-two button text-white">View</a>-->
             <!--            </div>-->
             <!--        </div>-->
             <!--    </div>-->
             <!--@endif-->
             <!--@if ($course->title == 'APSC ADVANCED BATCH 2023')-->
             <!--    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">-->
             <!--        <div class="single-features-light text-center">-->
             <!-- single features -->
             <!--            <div>-->
             <!--                <i class="base-color fas fa-book fa-3x"></i>-->
             <!--                <h4>PPTS</h4>-->
             <!--                <a href="{{ route('user.apsc.advanced.batch(c).classppt') }}"-->
             <!--                    class=" btn color-two button text-white">View</a>-->
             <!--            </div>-->
             <!--        </div>-->
             <!--    </div>-->
             <!--@endif-->
             <!--@if ($course->title == 'APSC FOUNDATION BATCH 2024')-->
             <!--    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">-->
             <!--        <div class="single-features-light text-center">-->
             <!-- single features -->
             <!--            <div>-->
             <!--                <i class="base-color fas fa-book fa-3x"></i>-->
             <!--                <h4>PPTS</h4>-->
             <!--                <a href="{{ route('user.apsc.advanced.batch(c).classppt') }}"-->
             <!--                    class=" btn color-two button text-white">View</a>-->
             <!--            </div>-->
             <!--        </div>-->
             <!--    </div>-->
             <!--@endif-->
             <!--@if ($course->title == 'APSC FOUNDATION BATCH 2023 (BATCH-2)')-->
             <!--    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">-->
             <!--        <div class="single-features-light text-center">-->
             <!-- single features -->
             <!--            <div>-->
             <!--                <i class="base-color fas fa-book fa-3x"></i>-->
             <!--                <h4>PPTS</h4>-->
             <!--                <a href="{{ route('user.apsc.advanced.batch(c).classppt') }}"-->
             <!--                    class=" btn color-two button text-white">View</a>-->
             <!--            </div>-->
             <!--        </div>-->
             <!--    </div>-->
             <!--@endif-->
             <!--@if ($course->title == 'APSC ADVANCED BATCH 2023 (A)')-->
             <!--    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">-->
             <!--        <div class="single-features-light text-center">-->
             <!-- single features -->
             <!--            <div>-->
             <!--                <i class="base-color fas fa-book fa-3x"></i>-->
             <!--                <h4>PPTS</h4>-->
             <!--                <a href="{{ route('user.apsc.advanced.batch(c).classppt') }}"-->
             <!--                    class=" btn color-two button text-white">View</a>-->
             <!--            </div>-->
             <!--        </div>-->
             <!--    </div>-->
             <!--@endif-->
             <!--@if ($course->title == 'APSC ADVANCED BATCH 2024')-->
             <!--    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">-->
             <!--        <div class="single-features-light text-center">-->
             <!-- single features -->
             <!--            <div>-->
             <!--                <i class="base-color fas fa-book fa-3x"></i>-->
             <!--                <h4>PPTS</h4>-->
             <!--                <a href="{{ route('user.apsc.advanced.batch(c).classppt') }}"-->
             <!--                    class=" btn color-two button text-white">View</a>-->
             <!--            </div>-->
             <!--        </div>-->
             <!--    </div>-->
             <!--@endif-->
             <!--@if ($course->title == 'APSC ADVANCED BATCH 2024 (A)')-->
             <!--    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">-->
             <!--        <div class="single-features-light text-center">-->
             <!-- single features -->
             <!--            <div>-->
             <!--                <i class="base-color fas fa-book fa-3x"></i>-->
             <!--                <h4>PPTS</h4>-->
             <!--                <a href="{{ route('user.apsc.advanced.batch(c).classppt') }}"-->
             <!--                    class=" btn color-two button text-white">View</a>-->
             <!--            </div>-->
             <!--        </div>-->
             <!--    </div>-->
             <!--@endif-->
             <!--<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">-->
             <!--    <div class="single-features-light text-center">-->
             <!-- single features -->
             <!--        <div>-->
             <!--            <i class="base-color fas fa-book fa-3x"></i>-->
             <!--            <h4>APSC PRELIMS (PYQ)</h4>-->
             <!--            @if ($course->title == '20 DAYS FREE BOOSTER COURSE')-->
             <!--                <a disabled href="#" class=" btn btn-secondary text-white">UPGRADE</a>-->
             <!--            @else-->
             <!--                <a href="{{ route('user.apsc.prelims.pyq') }}"-->
             <!--                    class=" btn color-two button text-white">View</a>-->
             <!--            @endif-->
             <!--        </div>-->
             <!--    </div>-->
             <!--</div>-->

             <!-- APSC MAINS PYQ -->
             @if ($course->title !== '90 DAYS BOOSTER COURSE (OFFLINE)' && $course->title != 'APSC TEST SERIES 2024' &&
             $course->title != 'APSC 2023 INTERVIEW
             PREPARATION' && $course->title != 'APSC 2024 MAINS PREPARATION' && $course->title != 'APSC SELF STUDY COURSE')
             <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">
                 <div class="single-features-light text-center">
                     <!-- single features -->
                     <div>
                         <i class="base-color fas fa-book fa-3x"></i>
                         <h4>APSC MAINS (PYQ)</h4>
                         @if ($course->title == '20 DAYS FREE BOOSTER COURSE')
                         <a disabled href="#" class=" btn btn-secondary text-white">UPGRADE</a>
                         @else
                         <a href="{{ route('user.apsc.pyq') }}" class=" btn color-two button text-white">View</a>
                         @endif

                     </div>
                 </div>
             </div>
             @endif
             <!-- 100 current affairs -->
             @if ($course->title != 'APSC 2023 INTERVIEW PREPARATION' && $course->title != 'APSC 2024 MAINS PREPARATION' && $course->title != 'APSC SELF STUDY COURSE' &&
             $course->title != 'APSC TEST SERIES 2024')
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
                         <h4>APSC 2023 CURRENT AFFAIRS FACTS</h4>
                         <a href="{{ asset('https://drive.google.com/file/d/1Ezhs8NFLAAaAPDIQCnlx0Ns5G67HGvMg/view?usp=share_link') }}"
                             class=" btn color-two button text-white">VIEW</a>
                     </div>
                 </div>
             </div>
             @endif

             <!-- REPORTS AND INDICES 2022 COMPILATION -->
             <!--<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">-->
             <!--    <div class="single-features-light text-center">-->
             <!--        <div>-->
             <!--            <i class="base-color fab fa-leanpub fa-3x"></i>-->
             <!--            <h4>REPORTS AND INDICES 2022 COMPILATION</h4>-->
             <!--            <a href="{{ asset('pdf/ACS Indices Reports Combilaions.pdf') }}" target="_blank"-->
             <!--                class="btn color-two button text-white">VIEW</a>-->
             <!--        </div>-->
             <!--    </div>-->
             <!--</div>-->
             <!-- INTERNATIONAL ORGANIZATIONS/INSTITUTIONS/GROUPINGS IN NEWS -->
             @if ($course->title != 'APSC 2023 INTERVIEW PREPARATION' && $course->title != 'APSC 2024 MAINS PREPARATION' && $course->title != 'APSC SELF STUDY COURSE' &&
             $course->title != 'APSC TEST SERIES 2024')
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
             @endif
             <!-- current affair question compilation -->
             <!--<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">-->
             <!--    <div class="single-features-light text-center">-->
             <!--        <div>-->
             <!--            <i class="base-color fab fa-leanpub fa-3x"></i>-->
             <!--            <h4>ACS CURRENT AFFAIRS QUESTIONS COMPILATION</h4>-->
             <!--            <a href="{{ asset('pdf/ACSPrelimsCurrentAffairsQuestionsCompilation22.pdf') }}"-->
             <!--                target="_blank" class="btn color-two button text-white">VIEW</a>-->
             <!--        </div>-->
             <!--    </div>-->
             <!--</div>-->

             @endif



             {{-- visible in all course --}}
             @if ($course->title != 'APSC 2023 INTERVIEW PREPARATION' && $course->title != 'APSC 2024 MAINS PREPARATION' && $course->title != 'APSC SELF STUDY COURSE' &&
             $course->title != 'APSC TEST SERIES 2024')

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

             @if ($course->title == 'APSC 2023 INTERVIEW PREPARATION')
             @foreach ($sub_topics as $video)
             <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-4">
                 <div class="single-features-light text-center">
                     <div>
                         <i class="base-color fa fa-play fa-3x"></i>
                         <h4 class="text-capitilize">{{ $video }}</h4>
                         <a href="{{ route('user.class.sub.videos', [$course->title, $video]) }}"
                             class=" btn color-two button text-white">VIEW</a><br>
                     </div>
                 </div>
             </div>
             @endforeach
             <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">
                 <div class="single-features-light text-center">
                     <div>
                         <i class="base-color fab fa-leanpub fa-3x"></i>
                         <h4>Current Affairs Material</h4>
                         <a href="https://acsindiaias.com/current_affairs_2023" target="_blank"
                             class="btn color-two button text-white">VIEW</a>
                     </div>
                 </div>
             </div>

             @endif
         </div>
         <!-- .row end -->
     </div>
     <!-- .row end -->
 </div>
 <hr>
 <!-- .container end -->