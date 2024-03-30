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
             @if ($course->title != 'Advanced CSAT (GS II)' &&
             $course->title != 'UPSC PRELIMS BOOSTER TEST SERIES' &&
             $course->title != 'SELF STUDY COURSE (UPSC)' &&
             $course->title != 'SELF STUDY COURSE (UPSC + APSC)' &&
             $course->title != 'IAS WORKSHOP')
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
             <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">
                 <div class="single-features-light text-center">
                     <div>
                         <i class="base-color fas fa-book fa-3x"></i>
                         <h4>TEST</h4>
                         <a href="{{ route('quiz.index', $course->title) }}"
                             class=" btn color-two button text-white">VIEW</a>
                     </div>
                 </div>
             </div>
             @endif



             @if ($course->title == 'SELF STUDY COURSE (UPSC)')
             <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">
                 <div class="single-features-light text-center">
                     <div>
                         <i class="base-color fas fa-book fa-3x"></i>
                         <h4>MY STUDY ROOM</h4>
                         <a href="{{ route('digipedia.self.index') }}" class=" btn color-two button text-white">View</a>
                     </div>
                 </div>
             </div>
             <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">
                 <div class="single-features-light text-center">
                     <div>
                         <i class="base-color fas fa-book fa-3x"></i>
                         <h4>TEST SERIES</h4>
                         <a href="{{ route('testseriesquiz.index', [$course->title, 'UPSC']) }}"
                             class=" btn color-two button text-white">VIEW</a>
                     </div>
                 </div>
             </div>



             @endif

             @if ($course->title == 'UPSC MAINS PREPARATION')
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
                     <div>
                         <i class="base-color fas fa-book fa-3x"></i>
                         <h4>RECORDED CLASSES</h4>
                         <a href="{{ route('user.new.video', 'UPSC MAINS PREPARATION') }}"
                             class=" btn color-two button text-white">VIEW</a>
                     </div>
                 </div>
             </div>
             @endif

             @if ($course->title == 'SELF STUDY COURSE (UPSC + APSC)')
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
                         <a href="{{ route('online.quiz.index', $course->title) }}"
                             class=" btn color-two button text-white">VIEW</a>
                     </div>
                 </div>
             </div>


             @endif

             @if ($course->title != 'IAS RECORDED CLASSES' &&
             $course->title != 'IAS STUDY MATERIALS' &&
             $course->title != 'OLD STUDENTS' &&
             $course->title != 'REVISE PRELIMS (BOOSTER COURSE & TEST SERIES)' &&
             $course->title != 'IAS OFFLINE BATCH 2023' &&
             $course->title != 'Advanced CSAT (GS II)' &&
             $course->title != 'UPSC PRELIMS BOOSTER TEST SERIES' &&
             $course->title != 'SELF STUDY COURSE (UPSC)' &&
             $course->title != 'SELF STUDY COURSE (UPSC + APSC)'&&
             $course->title != 'IAS WORKSHOP')
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
             @endif


             @if ($course->title == 'UPSC PRELIMS BOOSTER TEST SERIES')
             <!--  Prelims (PYQ) -->
             <div class="col-xs-12 col-sm-12 col-md-4 col-lg-6 mt-3">
                 <div class="single-features-light text-center">
                     <div>
                         <i class="base-color fas fa-book fa-3x"></i>
                         <h4>UPCS TEST</h4>
                         <a href="{{ route('testseriesquiz.index', [$course->title ,"UPSC"]) }}"
                             class=" btn color-two button text-white">VIEW</a>
                     </div>
                 </div>
             </div>
             <div class="col-xs-12 col-sm-12 col-md-4 col-lg-6 mt-3">
                 <div class="single-features-light text-center">
                     <div>
                         <i class="base-color fas fa-book fa-3x"></i>
                         <h4>TIPS & TRICKS SESSION</h4>
                         <a href="{{ route('user.class.video.index', $course->title) }}"
                             class=" btn color-two button text-white">VIEW</a>
                     </div>
                 </div>
             </div>
             @endif


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
             @if ($course->title == 'Advanced CSAT (GS II)')
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
                         <a href="{{ route('user.class.video.index', $course->title) }}"
                             class=" btn color-two button text-white">VIEW</a>
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
             @else
             @if ($course->title == 'REVISE PRELIMS (BOOSTER COURSE & TEST SERIES)')
             <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">
                 <div class="single-features-light text-center">
                     <!-- single features -->
                     <div>
                         <i class="base-color fas fa-book fa-3x"></i>
                         <h4>EXAM SCHEDULE</h4>
                         <!-- docs stored in public/pdf/revise_prelims -->
                         <a href="{{ asset('/pdf/revise_prelims/REVISE PRELIMS 2022.pdf') }}" target="_blank"
                             class=" btn color-two button text-white">View</a>
                     </div>
                 </div>
             </div>
             @endif

             @if ($course->title != 'UPSC PRELIMS BOOSTER TEST SERIES' &&
             $course->title != 'SELF STUDY COURSE (UPSC)' &&
             $course->title != 'SELF STUDY COURSE (UPSC + APSC)')
             <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">
                 <!-- 2 -->
                 <div class="single-features-light text-center">
                     <!-- single features -->
                     <div>
                         <i class="base-color fas fa-book fa-3x"></i>
                         <h4>STUDY PLAN</h4>
                         @if ($course->title == 'APSC RECORDED CLASSES')
                         <a href="{{ route('user.apsc.new.recorded.planias') }}"
                             class=" btn color-two button text-white">DOWNLOAD</a>
                         @endif
                         @if ($course->title == 'IAS RECORDED CLASSES')
                         <a href="{{ route('user.ias.recorded.planias') }}"
                             class=" btn color-two button text-white">DOWNLOAD</a>
                         @endif
                         @if ($course->title == 'IAS STUDY MATERIALS')
                         <a href="{{ route('user.ias.study.material.plan') }}"
                             class=" btn color-two button text-white">DOWNLOAD</a>
                         @endif
                         @if ($course->title == 'OLD STUDENTS')
                         <a href="{{ route('user.old.students.plan') }}"
                             class=" btn color-two button text-white">DOWNLOAD</a>
                         @endif
                         @if ($course->title == 'IAS OFFLINE BATCH 2022')
                         <a href="{{ route('user.regular.plan') }}"
                             class=" btn color-two button text-white">DOWNLOAD</a>
                         @endif
                         @if ($course->title == 'REVISE PRELIMS (BOOSTER COURSE & TEST SERIES)')
                         <a href="{{ route('user.revise.prelims.plan') }}"
                             class=" btn color-two button text-white">DOWNLOAD</a>
                         @endif
                         @if ($course->title == 'OFFLINE BATCH (G-2023)')
                         <a href="{{ route('user.recorded.offline.batch.d.2023.plan') }}"
                             class=" btn color-two button text-white">DOWNLOAD</a>
                         @endif
                         @if ($course->title == 'OFFLINE BATCH (D-2023)')
                         <a href="{{ route('user.recorded.offline.batch.g.2023.plan') }}"
                             class=" btn color-two button text-white">DOWNLOAD</a>
                         @endif
                         @if ($course->title == 'OFFLINE BATCH (MRNG-2022)')
                         <a href="{{ route('user.recorded.offline.batch.mrng.2022.plan') }}"
                             class=" btn color-two button text-white">DOWNLOAD</a>
                         @endif
                         @if ($course->title == 'OFFLINE BATCH (G-2023) BATCH-2')
                         <a href="{{ route('user.recorded.offline.batch.g.2023.batch-2.plan') }}" target="_blank"
                             class=" btn color-two button text-white">View</a>
                         @endif
                         @if ($course->title == 'OFFLINE BATCH (D-2023) BATCH-2')
                         <a href="{{ route('user.recorded.offline.batch.d.2023.batch-2.plan') }}" target="_blank"
                             class=" btn color-two button text-white">View</a>
                         @endif
                         @if ($course->title == 'IAS WORKSHOP')
                         <a href="{{ route('user.advanced.batch(c).plan') }}" target="_blank"
                             class=" btn color-two button text-white">View</a>
                         @endif
                     </div>
                 </div>
                 <!-- end single features -->
             </div>
             @endif

             @if ($course->title != 'UPSC PRELIMS BOOSTER TEST SERIES' &&
             $course->title != 'SELF STUDY COURSE (UPSC)' &&
             $course->title != 'SELF STUDY COURSE (UPSC + APSC)')
             <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">
                 <!-- 2 -->
                 <div class="single-features-light text-center">
                     <!-- single features -->
                     <div>
                         <i class="base-color fas fa-book fa-3x"></i>
                         <h4>ACS MATERIALS</h4>
                         @if ($course->title == 'APSC RECORDED CLASSES')
                         <a href="{{ route('user.apsc.new.recorded.material') }}"
                             class=" btn color-two button text-white">VIEW</a>
                         @endif
                         @if ($course->title == 'IAS RECORDED CLASSES')
                         <a href="{{ route('user.ias.recorded.material') }}"
                             class=" btn color-two button text-white">VIEW</a>
                         @endif
                         @if ($course->title == 'IAS STUDY MATERIALS')
                         <a href="{{ route('user.ias.study.material.material') }}"
                             class=" btn color-two button text-white">VIEW</a>
                         @endif
                         @if ($course->title == 'OLD STUDENTS')
                         <a href="{{ route('user.old.students.material') }}"
                             class=" btn color-two button text-white">VIEW</a>
                         @endif
                         @if ($course->title == 'IAS OFFLINE BATCH 2022')
                         <a href="{{ route('user.regular.material') }}"
                             class=" btn color-two button text-white">VIEW</a>
                         @endif
                         @if ($course->title == 'REVISE PRELIMS (BOOSTER COURSE & TEST SERIES)')
                         <a href="{{ route('user.revise.prelims.material') }}"
                             class=" btn color-two button text-white">VIEW</a>
                         @endif
                         @if ($course->title == 'OFFLINE BATCH (G-2023)')
                         <a href="{{ route('user.recorded.offline.batch.d.2023.material') }}"
                             class=" btn color-two button text-white">VIEW</a>
                         @endif
                         @if ($course->title == 'OFFLINE BATCH (D-2023)')
                         <a href="{{ route('user.recorded.offline.batch.g.2023.material') }}"
                             class=" btn color-two button text-white">VIEW</a>
                         @endif
                         @if ($course->title == 'OFFLINE BATCH (MRNG-2022)')
                         <a href="{{ route('user.recorded.offline.batch.mrng.2022.material') }}"
                             class=" btn color-two button text-white">VIEW</a>
                         @endif
                         @if ($course->title == 'OFFLINE BATCH (G-2023) BATCH-2')
                         <a href="{{ route('user.recorded.offline.batch.g.2023.batch-2.material') }}" target="_blank"
                             class=" btn color-two button text-white">View</a>
                         @endif
                         @if ($course->title == 'OFFLINE BATCH (D-2023) BATCH-2')
                         <a href="{{ route('user.recorded.offline.batch.d.2023.batch-2.material') }}" target="_blank"
                             class=" btn color-two button text-white">View</a>
                         @endif
                         @if ($course->title == 'IAS WORKSHOP')
                         <a href="{{ route('user.advanced.batch(c).material') }}" target="_blank"
                             class=" btn color-two button text-white">View</a>
                         @endif
                     </div>
                 </div>
                 <!-- end single features -->
             </div>
             @endif




             @if ($course->title != 'REVISE PRELIMS (BOOSTER COURSE & TEST SERIES)' &&
             $course->title != 'UPSC PRELIMS BOOSTER TEST SERIES' &&
             $course->title != 'SELF STUDY COURSE (UPSC)' &&
             $course->title != 'SELF STUDY COURSE (UPSC + APSC)'&&
             $course->title != 'IAS WORKSHOP')
             <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">
                 <!-- 1 -->
                 <div class="single-features-light text-center">
                     <!-- single features -->
                     <div>
                         <!-- uses solid style -->
                         <i class="base-color fas fa-book fa-3x"></i>
                         <h4>PREVIOUS QUESTION PAPER</h4>
                         @if ($course->title == 'APSC RECORDED CLASSES')
                         <a href="{{ route('user.apsc.new.recorded.paper') }}"
                             class=" btn color-two button text-white">VIEW</a>
                         @endif
                         @if ($course->title == 'IAS RECORDED CLASSES')
                         <a href="{{ route('user.ias.recorded.paper') }}"
                             class=" btn color-two button text-white">VIEW</a>
                         @endif
                         @if ($course->title == 'IAS STUDY MATERIALS')
                         <a href="{{ route('user.ias.study.material.paper') }}"
                             class=" btn color-two button text-white">VIEW</a>
                         @endif
                         @if ($course->title == 'OLD STUDENTS')
                         <a href="{{ route('user.old.students.paper') }}"
                             class=" btn color-two button text-white">VIEW</a>
                         @endif
                         @if ($course->title == 'IAS OFFLINE BATCH 2022')
                         <a href="{{ route('user.regular.paper') }}" class=" btn color-two button text-white">VIEW</a>
                         @endif
                         @if ($course->title == 'OFFLINE BATCH (G-2023)')
                         <a href="{{ route('user.recorded.offline.batch.d.2023.paper') }}"
                             class=" btn color-two button text-white">VIEW</a>
                         @endif
                         @if ($course->title == 'OFFLINE BATCH (D-2023)')
                         <a href="{{ route('user.recorded.offline.batch.g.2023.paper') }}"
                             class=" btn color-two button text-white">VIEW</a>
                         @endif
                         @if ($course->title == 'OFFLINE BATCH (MRNG-2022)')
                         <a href="{{ route('user.recorded.offline.batch.mrng.2022.paper') }}"
                             class=" btn color-two button text-white">VIEW</a>
                         @endif
                         @if ($course->title == 'OFFLINE BATCH (G-2023) BATCH-2')
                         <a href="{{ route('user.recorded.offline.batch.g.2023.batch-2.paper') }}" target="_blank"
                             class=" btn color-two button text-white">View</a>
                         @endif
                         @if ($course->title == 'OFFLINE BATCH (D-2023) BATCH-2')
                         <a href="{{ route('user.recorded.offline.batch.d.2023.batch-2.paper') }}" target="_blank"
                             class=" btn color-two button text-white">View</a>
                         @endif
                     </div>
                 </div>
                 <!-- end single features -->
             </div>
             @endif
             @if ($course->title != 'OLD STUDENTS' && $course->title != 'REVISE PRELIMS (BOOSTER COURSE & TEST SERIES)'
             &&
             $course->title != 'UPSC PRELIMS BOOSTER TEST SERIES' &&
             $course->title != 'SELF STUDY COURSE (UPSC)' &&
             $course->title != 'SELF STUDY COURSE (UPSC + APSC)'&&
             $course->title != 'IAS WORKSHOP')
             <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">
                 <div class="single-features-light text-center">
                     <!-- single features -->
                     <div>
                         <i class="base-color fas fa-book fa-3x"></i>
                         <h4>TEST SERIES</h4>
                         @if ($course->title == 'APSC RECORDED CLASSES')
                         <a href="{{ route('user.apsc.new.recorded.test', $course->title) }}"
                             class=" btn color-two button text-white">VIEW</a>
                         @endif
                         @if ($course->title == 'IAS RECORDED CLASSES')
                         <a href="{{ route('user.ias.recorded.test', $course->title) }}"
                             class=" btn color-two button text-white">VIEW</a>
                         @endif
                         @if ($course->title == 'IAS STUDY MATERIALS')
                         <a href="{{ route('user.ias.study.material.test', $course->title) }}"
                             class=" btn color-two button text-white">VIEW</a>
                         @endif
                         @if ($course->title == 'IAS OFFLINE BATCH 2022')
                         <a href="{{ route('user.regular.(f-2).testmaterial', $course->title) }}"
                             class=" btn color-two button text-white">VIEW</a>
                         @endif
                         @if ($course->title == 'OFFLINE BATCH (G-2023)')
                         <a href="{{ route('user.recorded.offline.batch.d.2023.test', $course->title) }}"
                             class=" btn color-two button text-white">VIEW</a>
                         @endif
                         @if ($course->title == 'OFFLINE BATCH (D-2023)')
                         <a href="{{ route('user.recorded.offline.batch.g.2023.test', $course->title) }}"
                             class=" btn color-two button text-white">VIEW</a>
                         @endif
                         @if ($course->title == 'OFFLINE BATCH (MRNG-2022)')
                         <a href="{{ route('user.recorded.offline.batch.mrng.2022.test', $course->title) }}"
                             class=" btn color-two button text-white">VIEW</a>
                         @endif
                         @if ($course->title == 'OFFLINE BATCH (G-2023) BATCH-2')
                         <a href="{{ route('user.recorded.offline.batch.g.2023.batch-2.test', $course->title) }}"
                             class=" btn color-two button text-white">VIEW</a>
                         @endif
                         @if ($course->title == 'OFFLINE BATCH (D-2023) BATCH-2')
                         <a href="{{ route('user.recorded.offline.batch.d.2023.batch-2.test', $course->title) }}"
                             class=" btn color-two button text-white">VIEW</a>
                         @endif
                     </div>
                 </div>
             </div>
             @endif
             @if ($course->title != 'IAS STUDY MATERIALS' &&
             $course->title != 'UPSC PRELIMS BOOSTER TEST SERIES')
             <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">
                 <!-- 2 -->
                 <div class="single-features-light text-center">
                     <!-- single features -->
                     <div>
                         <i class="base-color fas fa-book fa-3x"></i>
                         <h4>RECORDED CLASSES</h4>
                         @if ($course->title == 'APSC RECORDED CLASSES')
                         <a href="{{ route('user.class.video.index', $course->title) }}"
                             class=" btn color-two button text-white">VIEW</a>
                         @endif
                         @if ($course->title == 'IAS RECORDED CLASSES')
                         <a href="{{ route('user.new.video', $course->title) }}"
                             class=" btn color-two button text-white">VIEW</a>
                         @endif
                         @if ($course->title == 'OLD STUDENTS')
                         <a href="{{ route('user.class.video.index', $course->title) }}"
                             class=" btn color-two button text-white">VIEW</a>
                         @endif
                         @if ($course->title == 'IAS OFFLINE BATCH 2022')
                         <a href="{{ route('user.new.video', $course->title) }}"
                             class=" btn color-two button text-white">VIEW</a>
                         @endif
                         @if ($course->title == 'REVISE PRELIMS (BOOSTER COURSE & TEST SERIES)')
                         <a href="{{ route('user.class.video.index', $course->title) }}"
                             class=" btn color-two button text-white">VIEW</a>
                         @endif
                         @if ($course->title == 'OFFLINE BATCH (G-2023)')
                         <a href="{{ route('user.new.video', $course->title) }}"
                             class=" btn color-two button text-white">VIEW</a>
                         @endif
                         @if ($course->title == 'OFFLINE BATCH (D-2023)')
                         <a href="{{ route('user.new.video', $course->title) }}"
                             class=" btn color-two button text-white">VIEW</a>
                         @endif
                         @if ($course->title == 'OFFLINE BATCH (MRNG-2022)')
                         <a href="{{ route('user.new.video', $course->title) }}"
                             class=" btn color-two button text-white">VIEW</a>
                         @endif
                         @if ($course->title == 'OFFLINE BATCH (G-2023) BATCH-2')
                         <a href="{{ route('user.new.video', $course->title) }}"
                             class=" btn color-two button text-white">VIEW</a>
                         @endif
                         @if ($course->title == 'OFFLINE BATCH (D-2023) BATCH-2')
                         <a href="{{ route('user.new.video', $course->title) }}"
                             class=" btn color-two button text-white">VIEW</a>
                         @endif
                         @if ($course->title == 'SELF STUDY COURSE (UPSC)')
                         <a href="{{ route('user.new.video', 'IAS ADVANCED BATCH 2023 (A)') }}"
                             class=" btn color-two button text-white">VIEW</a>
                         @endif
                         @if ($course->title == 'SELF STUDY COURSE (UPSC + APSC)')
                         <a href="{{ route('user.new.video', 'IAS ADVANCED BATCH 2023 (A)') }}"
                             class=" btn color-two button text-white">VIEW</a>
                         @endif
                         @if ($course->title == 'IAS WORKSHOP')
                         <a href="{{ route('user.class.video.index', $course->title) }}"
                             class=" btn color-two button text-white">VIEW</a>
                         @endif
                         @if ($course->title == 'Recorded online')
                         <a href="{{ route('user.class.video.index', $course->title) }}"
                             class=" btn color-two button text-white">VIEW</a>
                         @endif
                     </div>
                 </div>
                 <!-- end single features -->
             </div>
             @endif
             @if ($course->title == 'OFFLINE BATCH (G-2023)')
             <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">
                 <div class="single-features-light text-center">
                     <!-- single features -->
                     <div>
                         <i class="base-color fas fa-book fa-3x"></i>
                         <h4>CLASS PPT</h4>
                         <a href="{{ route('user.recorded.offline.batch.g.2023.classppt') }}"
                             class=" btn color-two button text-white">View</a>
                     </div>
                 </div>
             </div>
             @endif
             @if ($course->title == 'OFFLINE BATCH (D-2023)')
             <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">
                 <div class="single-features-light text-center">
                     <!-- single features -->
                     <div>
                         <i class="base-color fas fa-book fa-3x"></i>
                         <h4>CLASS PPT</h4>
                         <a href="{{ route('user.recorded.offline.batch.d.2023.classppt') }}"
                             class=" btn color-two button text-white">View</a>
                     </div>
                 </div>
             </div>
             @endif
             @if ($course->title == 'OFFLINE BATCH (MRNG-2022)')
             <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">
                 <div class="single-features-light text-center">
                     <!-- single features -->
                     <div>
                         <i class="base-color fas fa-book fa-3x"></i>
                         <h4>CLASS PPT</h4>
                         <a href="{{ route('user.recorded.offline.batch.mrng.2022.classppt') }}"
                             class=" btn color-two button text-white">View</a>
                     </div>
                 </div>
             </div>
             @endif
             @if ($course->title == 'IAS RECORDED CLASSES')
             <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">
                 <div class="single-features-light text-center">
                     <!-- single features -->
                     <div>
                         <i class="base-color fas fa-book fa-3x"></i>
                         <h4>PPT</h4>
                         <a href="{{ route('user.ias.recorded.ppt') }}"
                             class=" btn color-two button text-white">View</a>
                     </div>
                 </div>
             </div>
             @endif
             @if ($course->title == 'REVISE PRELIMS (BOOSTER COURSE & TEST SERIES)')
             <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">
                 <div class="single-features-light text-center">
                     <div>
                         <i class="base-color fab fa-leanpub fa-3x"></i>
                         <h4>PRELIMS PYQ</h4>
                         <a href="{{ route('user.revise.prelims.pyq') }}"
                             class="btn color-two button text-white">VIEW</a>
                     </div>
                 </div>
             </div>
             <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">
                 <div class="single-features-light text-center">
                     <div>
                         <i class="base-color fab fa-leanpub fa-3x"></i>
                         <h4>Question Center</h4>
                         <a href="{{ route('user.revise.prelims.question') }}"
                             class="btn color-two button text-white">VIEW</a>
                     </div>
                 </div>
             </div>
             <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">
                 <div class="single-features-light text-center">
                     <div>
                         <i class="base-color fas fa-book fa-3x"></i>
                         <h4>Answer Center</h4>
                         <a href="{{ route('user.answer.resultIndex', $course->title) }}"
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
             @elseif ($course->title != 'UPSC PRELIMS BOOSTER TEST SERIES' &&
             $course->title != 'SELF STUDY COURSE (UPSC)' &&
             $course->title != 'SELF STUDY COURSE (UPSC + APSC)'&&
             $course->title != 'IAS WORKSHOP')
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


             <!-- 100 current affairs -->
             @if ($course->title != 'UPSC PRELIMS BOOSTER TEST SERIES' &&
             $course->title != 'SELF STUDY COURSE (UPSC)' &&
             $course->title != 'SELF STUDY COURSE (UPSC + APSC)'&&
             $course->title != 'IAS WORKSHOP')

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