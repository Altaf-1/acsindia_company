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
             @if ($course->title != 'IAS BOOSTER COURSE (H)' &&
             $course->title != 'IAS BOOSTER COURSE (I)' &&
             $course->title != 'IAS BOOSTER COURSE (J)' &&
             $course->title != 'IAS BOOSTER COURSE (K)' &&
             $course->title != 'IAS BOOSTER COURSE (L)'&&
             $course->title != 'IAS BOOSTER COURSE (D)'&&
             $course->title != 'IAS BOOSTER COURSE (E)'&&
             $course->title != 'IAS BOOSTER COURSE (F)'&&
             $course->title != 'IAS BOOSTER COURSE (G)' &&
             $course->title != 'IAS BOOSTER COURSE (M)' &&
             $course->title != 'IAS BOOSTER COURSE (N)' &&
             $course->title != 'IAS BOOSTER COURSE (0)' &&
             $course->title != 'IAS BOOSTER COURSE (P)')
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

             @if ($course->title != 'ACS +')
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

             <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">
                 <div class="single-features-light text-center">
                     <!-- single features -->
                     <div>
                         <i class="base-color fas fa-book fa-3x"></i>
                         <h4>STUDY PLAN</h4>
                         <a href="{{ route('user.advanced.batch(c).plan') }}"
                             class=" btn color-two button text-white">View</a>
                     </div>
                 </div>
             </div>

             <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">
                 <div class="single-features-light text-center">
                     <!-- single features -->
                     <div>
                         <i class="base-color fas fa-book fa-3x"></i>
                         <h4>ACS MATERIALS</h4>
                         <a href="{{ route('user.advanced.batch(c).material') }}"
                             class=" btn color-two button text-white">View</a>
                     </div>
                 </div>
             </div>

             <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">
                 <div class="single-features-light text-center">
                     <div>
                         <i class="base-color fab fa-leanpub fa-3x"></i>
                         <h4>Current Affairs 2023</h4>
                         <a href="{{asset('/current_affairs_2023')}}" target="_blank"
                             class="btn color-two button text-white">VIEW</a>
                     </div>
                 </div>
             </div>

             <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">
                 <div class="single-features-light text-center">
                     <div>
                         <i class="base-color fas fa-book fa-3x"></i>
                         <h4>PREVIOUS YEAR QUESTION PAPER</h4>
                         <h6>(CHAPTERWISE)</h6>
                         <a href="{{ route('user.advanced.batch(c).paper') }}"
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
             <!--            @if ($course->title == 'IAS ADVANCED BATCH')-->
             <!--                <a href="{{ route('user.ias.advance.paper') }}"-->
             <!--                    class=" btn color-two button text-white">VIEW</a>-->
             <!--            @endif-->
             <!--            @if ($course->title == 'IAS FOUNDATION BATCH')-->
             <!--                <a href="{{ route('user.ias.found.paper') }}"-->
             <!--                    class=" btn color-two button text-white">VIEW</a>-->
             <!--            @endif-->
             <!--            @if ($course->title == 'IAS ADVANCED BATCH (MORNING)')-->
             <!--                <a href="{{ route('user.ias.advance.mrng.paper') }}"-->
             <!--                    class=" btn color-two button text-white">VIEW</a>-->
             <!--            @endif-->

             <!--            @if ($course->title == 'IAS ADVANCED BATCH 2022')-->
             <!--                <a href="{{ route('user.ias.advance.batch.2022.paper') }}"-->
             <!--                    class=" btn color-two button text-white">VIEW</a>-->
             <!--            @endif-->
             <!--            @if ($course->title == 'IAS FOUNDATION BATCH 2023')-->
             <!--                <a href="{{ route('user.ias.foundation.2023.paper') }}"-->
             <!--                    class=" btn color-two button text-white">VIEW</a>-->
             <!--            @endif-->
             <!--            @if ($course->title == 'IAS TARGET BATCH 2022')-->
             <!--                <a href="{{ route('user.ias.target.batch.2022.paper') }}"-->
             <!--                    class=" btn color-two button text-white">VIEW</a>-->
             <!--            @endif-->
             <!--            @if ($course->title == 'advancedbatch2022(f-2)')-->
             <!--                <a href="{{ route('user.ias.target.batch.2022.paper') }}"-->
             <!--                    class=" btn color-two button text-white">VIEW</a>-->
             <!--            @endif-->
             <!--            @if ($course->title == 'foundation2023(b-2)')-->
             <!--                <a href="{{ route('user.foundation.(b-2).2023.paper') }}"-->
             <!--                    class=" btn color-two button text-white">VIEW</a>-->
             <!--            @endif-->
             <!--            @if ($course->title == 'IAS FOUNDATION BATCH 2023 (BATCH-2)')-->
             <!--                <a href="{{ route('user.ias.foundation.(batch-2).2023.paper') }}"-->
             <!--                    class=" btn color-two button text-white">VIEW</a>-->
             <!--            @endif-->
             <!--            @if ($course->title == 'IAS ADVANCED BATCH 2022 (BATCH 2)')-->
             <!--                <a href="{{ route('user.target.2022.(batch2).paper') }}"-->
             <!--                    class=" btn color-two button text-white">VIEW</a>-->
             <!--            @endif-->
             <!--            @if ($course->title == 'IAS FOUNDATION BATCH 2024')-->
             <!--                <a href="{{ route('user.foundation.2024.paper') }}"-->
             <!--                    class=" btn color-two button text-white">VIEW</a>-->
             <!--            @endif-->
             <!--            @if ($course->title == 'IAS ADVANCED BATCH 2023')-->
             <!--                <a href="{{ route('user.advanced.batch.2023.paper') }}"-->
             <!--                    class=" btn color-two button text-white">VIEW</a>-->
             <!--            @endif-->
             <!--            @if ($course->title == 'IAS ADVANCED BATCH 2023 (A)')-->
             <!--                <a href="{{ route('user.advanced.batch.2023(A).paper') }}"-->
             <!--                    class=" btn color-two button text-white">VIEW</a>-->
             <!--            @endif-->
             <!--            @if ($course->title == 'IAS ADVANCED BATCH 2024')-->
             <!--                <a href="{{ route('user.advanced.batch.2024.paper') }}"-->
             <!--                    class=" btn color-two button text-white">VIEW</a>-->
             <!--            @endif-->
             <!--            @if ($course->title == 'IAS ADVANCED BATCH 2024 (A)')-->
             <!--                <a href="{{ route('user.advanced.batch.2024(A).paper') }}"-->
             <!--                    class=" btn color-two button text-white">VIEW</a>-->
             <!--            @endif-->
             <!--            @if ($course->title == 'IAS ADVANCED BATCH 2024 (B)')-->
             <!--                <a href="{{ route('user.advanced.batch.2024(B).paper') }}"-->
             <!--                    class=" btn color-two button text-white">VIEW</a>-->
             <!--            @endif-->
             <!--            @if ($course->title == 'IAS ADVANCED BATCH 2023 (B)')-->
             <!--                <a href="{{ route('user.advanced.batch.2023(B).paper') }}"-->
             <!--                    class=" btn color-two button text-white">VIEW</a>-->
             <!--            @endif-->
             <!--            @if ($course->title == 'IAS BOOSTER COURSE (C)')-->
             <!--                <a href="{{ route('user.ias.booster.course(c).paper') }}"-->
             <!--                    class=" btn color-two button text-white">VIEW</a>-->
             <!--            @endif-->
             <!--            @if ($course->title == 'IAS ADVANCED BATCH (C)')-->
             <!--                <a href="{{ route('user.advanced.batch(c).paper') }}"-->
             <!--                    class=" btn color-two button text-white">VIEW</a>-->
             <!--            @endif-->
             <!--            @if ($course->title == 'IAS BOOSTER COURSE (D)')-->
             <!--                <a href="{{ route('user.ias.booster.course(d).paper') }}"-->
             <!--                    class=" btn color-two button text-white">VIEW</a>-->
             <!--            @endif-->
             <!--            @if ($course->title == 'IAS BOOSTER COURSE (E)')-->
             <!--                <a href="{{ route('user.ias.booster.course(e).paper') }}"-->
             <!--                    class=" btn color-two button text-white">VIEW</a>-->
             <!--            @endif-->
             <!--            @if ($course->title == 'IAS BOOSTER COURSE (F)')-->
             <!--                <a href="{{ route('user.ias.booster.course(f).paper') }}"-->
             <!--                    class=" btn color-two button text-white">VIEW</a>-->
             <!--            @endif-->
             <!--            @if ($course->title == 'IAS BOOSTER COURSE (G)')-->
             <!--                <a href="{{ route('user.ias.booster.course(g).paper') }}"-->
             <!--                    class=" btn color-two button text-white">VIEW</a>-->
             <!--            @endif-->
             <!--            @if ($course->title == 'IAS BOOSTER COURSE (H)')-->
             <!--                <a href="{{ route('user.ias.booster.course(g).paper') }}"-->
             <!--                    class=" btn color-two button text-white">VIEW</a>-->
             <!--            @endif-->
             <!--            @if ($course->title == 'IAS BOOSTER COURSE (I)')-->
             <!--                <a href="{{ route('user.ias.booster.course(g).paper') }}"-->
             <!--                    class=" btn color-two button text-white">VIEW</a>-->
             <!--            @endif-->
             <!--            @if ($course->title == 'IAS BOOSTER COURSE (J)')-->
             <!--                <a href="{{ route('user.ias.booster.course(g).paper') }}"-->
             <!--                    class=" btn color-two button text-white">VIEW</a>-->
             <!--            @endif-->
             <!--            @if ($course->title == 'IAS BOOSTER COURSE (K)')-->
             <!--                <a href="{{ route('user.ias.booster.course(g).paper') }}"-->
             <!--                    class=" btn color-two button text-white">VIEW</a>-->
             <!--            @endif-->
             <!--            @if ($course->title == 'IAS BOOSTER COURSE (L)')-->
             <!--                <a href="{{ route('user.ias.booster.course(g).paper') }}"-->
             <!--                    class=" btn color-two button text-white">VIEW</a>-->
             <!--            @endif-->
             <!--        </div>-->
             <!--    </div>-->
             <!-- end single features -->
             <!--</div>-->

             <!--@if ($course->title == 'advancedbatch2022(f-2)')-->
             <!--<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">-->
             <!--    <div class="single-features-light text-center">-->
             <!--        <div>-->
             <!--            <i class="base-color fas fa-book fa-3x"></i>-->
             <!--            <h4>TEST SERIES</h4>-->
             <!--            <a href="{{ route('user.advanced.batch.2022.(f-2).testmaterial', $course->title) }}"-->
             <!--                    class=" btn color-two button text-white">VIEW</a>-->
             <!--        </div>-->
             <!--    </div>-->
             <!--</div>-->

             <!--            @endif-->
             <!--<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">-->
             <!-- 2 -->
             <!--    <div class="single-features-light text-center">-->
             <!-- single features -->
             <!--        <div>-->
             <!--            <i class="base-color fas fa-book fa-3x"></i>-->
             <!--            <h4>TEST SERIES</h4>-->
             <!--            @if ($course->title == 'IAS ADVANCED BATCH')-->
             <!--                <a href="{{ route('user.ias.advance.test', $course->title) }}"-->
             <!--                    class=" btn color-two button text-white">VIEW</a>-->
             <!--            @endif-->
             <!--            @if ($course->title == 'IAS FOUNDATION BATCH')-->
             <!--                <a href="{{ route('user.ias.found.test', $course->title) }}"-->
             <!--                    class=" btn color-two button text-white">VIEW</a>-->
             <!--            @endif-->
             <!--            @if ($course->title == 'IAS ADVANCED BATCH (MORNING)')-->
             <!--                <a href="{{ route('user.ias.advance.mrng.testmaterial', $course->title) }}"-->
             <!--                    class=" btn color-two button text-white">VIEW</a>-->
             <!--            @endif-->
             <!--            @if ($course->title == 'IAS ADVANCED BATCH 2022')-->
             <!--                <a href="{{ route('user.ias.advance.batch.2022.testmaterial', $course->title) }}"-->
             <!--                    class=" btn color-two button text-white">VIEW</a>-->
             <!--            @endif-->
             <!--            @if ($course->title == 'IAS FOUNDATION BATCH 2023')-->
             <!--                <a href="{{ route('user.ias.foundation.2023.test', $course->title) }}"-->
             <!--                    class=" btn color-two button text-white">VIEW</a>-->
             <!--            @endif-->
             <!--            @if ($course->title == 'IAS TARGET BATCH 2022')-->
             <!--                <a href="{{ route('user.ias.target.batch.2022.testmaterial', $course->title) }}"-->
             <!--                    class=" btn color-two button text-white">VIEW</a>-->
             <!--            @endif-->
             <!--            @if ($course->title == 'advancedbatch2022(f-2)')-->
             <!--                <a href="{{ route('user.advanced.batch.2022.(f-2).testmaterial', $course->title) }}"-->
             <!--                    class=" btn color-two button text-white">VIEW</a>-->
             <!--            @endif-->
             <!--            @if ($course->title == 'foundation2023(b-2)')-->
             <!--                <a href="{{ route('user.foundation.2023.(b-2).test', $course->title) }}"-->
             <!--                    class=" btn color-two button text-white">VIEW</a>-->
             <!--            @endif-->
             <!--            @if ($course->title == 'IAS FOUNDATION BATCH 2023 (BATCH-2)')-->
             <!--                <a href="{{ route('user.ias.foundation.2023.(batch-2).test', $course->title) }}"-->
             <!--                    class=" btn color-two button text-white">VIEW</a>-->
             <!--            @endif-->
             <!--            @if ($course->title == 'IAS ADVANCED BATCH 2022 (BATCH 2)')-->
             <!--                <a href="{{ route('user.target.2022.(batch2).test', $course->title) }}"-->
             <!--                    class=" btn color-two button text-white">VIEW</a>-->
             <!--            @endif-->
             <!--            @if ($course->title == 'IAS FOUNDATION BATCH 2024')-->
             <!--                <a href="{{ route('user.foundation.2024.test', $course->title) }}"-->
             <!--                    class=" btn color-two button text-white">VIEW</a>-->
             <!--            @endif-->
             <!--            @if ($course->title == 'IAS ADVANCED BATCH 2023')-->
             <!--                <a href="{{ route('user.advanced.batch.2023.test', $course->title) }}"-->
             <!--                    class=" btn color-two button text-white">VIEW</a>-->
             <!--            @endif-->
             <!--            @if ($course->title == 'IAS ADVANCED BATCH 2023 (A)')-->
             <!--                <a href="{{ route('user.advanced.batch.2023(A).test', $course->title) }}"-->
             <!--                    class=" btn color-two button text-white">VIEW</a>-->
             <!--            @endif-->
             <!--            @if ($course->title == 'IAS ADVANCED BATCH 2024')-->
             <!--                <a href="{{ route('user.advanced.batch.2024.test', $course->title) }}"-->
             <!--                    class=" btn color-two button text-white">VIEW</a>-->
             <!--            @endif-->
             <!--            @if ($course->title == 'IAS ADVANCED BATCH 2024 (A)')-->
             <!--                <a href="{{ route('user.advanced.batch.2024(A).test', $course->title) }}"-->
             <!--                    class=" btn color-two button text-white">VIEW</a>-->
             <!--            @endif-->
             <!--            @if ($course->title == 'IAS ADVANCED BATCH 2024 (B)')-->
             <!--                <a href="{{ route('user.advanced.batch.2024(B).test', $course->title) }}"-->
             <!--                    class=" btn color-two button text-white">VIEW</a>-->
             <!--            @endif-->
             <!--            @if ($course->title == 'IAS ADVANCED BATCH 2023 (B)')-->
             <!--                <a href="{{ route('user.advanced.batch.2023(B).test', $course->title) }}"-->
             <!--                    class=" btn color-two button text-white">VIEW</a>-->
             <!--            @endif-->
             <!--            @if ($course->title == 'IAS BOOSTER COURSE (C)')-->
             <!--                <a href="{{ route('user.ias.booster.course(c).test', $course->title) }}"-->
             <!--                    class=" btn color-two button text-white">VIEW</a>-->
             <!--            @endif-->
             <!--            @if ($course->title == 'IAS ADVANCED BATCH (C)')-->
             <!--                <a href="{{ route('user.advanced.batch(c).test', $course->title) }}"-->
             <!--                    class=" btn color-two button text-white">VIEW</a>-->
             <!--            @endif-->
             <!--            @if ($course->title == 'IAS BOOSTER COURSE (D)')-->
             <!--                <a href="{{ route('user.ias.booster.course(d).test', $course->title) }}"-->
             <!--                    class=" btn color-two button text-white">VIEW</a>-->
             <!--            @endif-->
             <!--            @if ($course->title == 'IAS BOOSTER COURSE (E)')-->
             <!--                <a href="{{ route('user.ias.booster.course(e).test', $course->title) }}"-->
             <!--                    class=" btn color-two button text-white">VIEW</a>-->
             <!--            @endif-->
             <!--            @if ($course->title == 'IAS BOOSTER COURSE (F)')-->
             <!--                <a href="{{ route('user.ias.booster.course(f).test', $course->title) }}"-->
             <!--                    class=" btn color-two button text-white">VIEW</a>-->
             <!--            @endif-->
             <!--            @if ($course->title == 'IAS BOOSTER COURSE (G)')-->
             <!--                <a href="{{ route('user.ias.booster.course(g).test', $course->title) }}"-->
             <!--                    class=" btn color-two button text-white">VIEW</a>-->
             <!--            @endif-->
             <!--            @if ($course->title == 'IAS BOOSTER COURSE (H)')-->
             <!--                <a href="{{ route('user.ias.booster.course(g).test', $course->title) }}"-->
             <!--                    class=" btn color-two button text-white">VIEW</a>-->
             <!--            @endif-->
             <!--            @if ($course->title == 'IAS BOOSTER COURSE (I)')-->
             <!--                <a href="{{ route('user.ias.booster.course(g).test', $course->title) }}"-->
             <!--                    class=" btn color-two button text-white">VIEW</a>-->
             <!--            @endif-->
             <!--            @if ($course->title == 'IAS BOOSTER COURSE (J)')-->
             <!--                <a href="{{ route('user.ias.booster.course(g).test', $course->title) }}"-->
             <!--                    class=" btn color-two button text-white">VIEW</a>-->
             <!--            @endif-->
             <!--            @if ($course->title == 'IAS BOOSTER COURSE (K)')-->
             <!--                <a href="{{ route('user.ias.booster.course(g).test', $course->title) }}"-->
             <!--                    class=" btn color-two button text-white">VIEW</a>-->
             <!--            @endif-->
             <!--            @if ($course->title == 'IAS BOOSTER COURSE (L)')-->
             <!--                <a href="{{ route('user.ias.booster.course(g).test', $course->title) }}"-->
             <!--                    class=" btn color-two button text-white">VIEW</a>-->
             <!--            @endif-->
             <!--        </div>-->
             <!--    </div>-->
             <!--</div>-->
             <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">
                 <!-- 2 -->
                 <div class="single-features-light text-center">
                     <!-- single features -->
                     <div>
                         <i class="base-color fas fa-book fa-3x"></i>
                         <h4>RECORDED CLASSES</h4>
                         @if ($course->title == 'IAS ADVANCED BATCH')
                         <a href="{{ route('user.class.video.index', $course->title) }}"
                             class=" btn color-two button text-white">View</a>
                         @endif
                         @if ($course->title == 'IAS FOUNDATION BATCH')
                         <a href="{{ route('user.class.video.index', $course->title) }}"
                             class=" btn color-two button text-white">View</a>
                         @endif
                         @if ($course->title == 'IAS ADVANCED BATCH (MORNING)')
                         <a href="{{ route('user.class.video.index', $course->title) }}"
                             class=" btn color-two button text-white">View</a>
                         @endif
                         @if ($course->title == 'IAS ADVANCED BATCH 2022')
                         <a href="{{ route('user.new.video', $course->title) }}"
                             class=" btn color-two button text-white">View</a>
                         @endif
                         @if ($course->title == 'IAS FOUNDATION BATCH 2023')
                         <a href="{{ route('user.new.video', $course->title) }}"
                             class=" btn color-two button text-white">View</a>
                         @endif
                         @if ($course->title == 'IAS TARGET BATCH 2022')
                         <a href="{{ route('user.new.video', $course->title) }}"
                             class=" btn color-two button text-white">View</a>
                         @endif
                         @if ($course->title == 'advancedbatch2022(f-2)')
                         <a href="{{ route('user.new.video', $course->title) }}"
                             class=" btn color-two button text-white">View</a>
                         @endif
                         @if ($course->title == 'foundation2023(b-2)')
                         <a href="{{ route('user.new.video', $course->title) }}"
                             class=" btn color-two button text-white">View</a>
                         @endif

                         @if ($course->title == 'IAS FOUNDATION BATCH 2023 (BATCH-2)')
                         <a href="{{ route('user.new.video', $course->title) }}"
                             class=" btn color-two button text-white">View</a>
                         @endif
                         @if ($course->title == 'IAS ADVANCED BATCH 2022 (BATCH 2)')
                         <a href="{{ route('user.new.video', $course->title) }}"
                             class=" btn color-two button text-white">View</a>
                         @endif
                         @if ($course->title == 'IAS FOUNDATION BATCH 2024')
                         <a href="{{ route('user.new.video', $course->title) }}"
                             class=" btn color-two button text-white">View</a>
                         @endif
                         @if ($course->title == 'IAS ADVANCED BATCH 2023')
                         <a href="{{ route('user.new.video', $course->title) }}"
                             class=" btn color-two button text-white">View</a>
                         @endif
                         @if ($course->title == 'IAS ADVANCED BATCH 2023 (A)')
                         <a href="{{ route('user.new.video', $course->title) }}"
                             class=" btn color-two button text-white">View</a>
                         @endif
                         @if ($course->title == 'IAS ADVANCED BATCH 2024')
                         <a href="{{ route('user.new.video', $course->title) }}"
                             class=" btn color-two button text-white">View</a>
                         @endif
                         @if ($course->title == 'IAS ADVANCED BATCH 2024 (A)')
                         <a href="{{ route('user.new.video', $course->title) }}"
                             class=" btn color-two button text-white">VIEW</a>
                         @endif
                         @if ($course->title == 'IAS ADVANCED BATCH 2024 (B)')
                         <a href="{{ route('user.new.video', $course->title) }}"
                             class=" btn color-two button text-white">VIEW</a>
                         @endif
                         @if ($course->title == 'IAS ADVANCED BATCH 2023 (B)')
                         <a href="{{ route('user.new.video', $course->title) }}"
                             class=" btn color-two button text-white">VIEW</a>
                         @endif
                         @if ($course->title == 'IAS BOOSTER COURSE (C)')
                         <a href="{{ route('user.new.video', $course->title) }}"
                             class=" btn color-two button text-white">VIEW</a>
                         @endif
                         @if ($course->title == 'IAS ADVANCED BATCH (C)')
                         <a href="{{ route('user.new.video', $course->title) }}"
                             class=" btn color-two button text-white">VIEW</a>
                         @endif
                         @if ($course->title == 'IAS BOOSTER COURSE (D)')
                         <a href="{{ route('user.new.video', $course->title) }}"
                             class=" btn color-two button text-white">VIEW</a>
                         @endif
                         @if ($course->title == 'IAS BOOSTER COURSE (E)')
                         <a href="{{ route('user.new.video', $course->title) }}"
                             class=" btn color-two button text-white">VIEW</a>
                         @endif
                         @if ($course->title == 'IAS BOOSTER COURSE (F)')
                         <a href="{{ route('user.new.video', $course->title) }}"
                             class=" btn color-two button text-white">VIEW</a>
                         @endif
                         @if ($course->title == 'IAS BOOSTER COURSE (G)')
                         <a href="{{ route('user.new.video', $course->title) }}"
                             class=" btn color-two button text-white">VIEW</a>
                         @endif
                         @if ($course->title == 'IAS BOOSTER COURSE (H)')
                         <a href="{{ route('user.new.video', $course->title) }}"
                             class=" btn color-two button text-white">VIEW</a>
                         @endif
                         @if ($course->title == 'IAS BOOSTER COURSE (I)')
                         <a href="{{ route('user.new.video', $course->title) }}"
                             class=" btn color-two button text-white">VIEW</a>
                         @endif
                         @if ($course->title == 'IAS BOOSTER COURSE (J)')
                         <a href="{{ route('user.new.video', $course->title) }}"
                             class=" btn color-two button text-white">VIEW</a>
                         @endif
                         @if ($course->title == 'IAS BOOSTER COURSE (K)')
                         <a href="{{ route('user.new.video', $course->title) }}"
                             class=" btn color-two button text-white">VIEW</a>
                         @endif
                         @if ($course->title == 'IAS BOOSTER COURSE (L)')
                         <a href="{{ route('user.new.video', $course->title) }}"
                             class=" btn color-two button text-white">VIEW</a>
                         @endif
                         @if ($course->title == 'IAS BOOSTER COURSE (M)')
                         <a href="{{ route('user.new.video', $course->title) }}"
                             class=" btn color-two button text-white">VIEW</a>
                         @endif
                         @if ($course->title == 'IAS BOOSTER COURSE (0)')
                         <a href="{{ route('user.new.video', $course->title) }}"
                             class=" btn color-two button text-white">VIEW</a>
                         @endif
                         @if ($course->title == 'IAS BOOSTER COURSE (N)')
                         <a href="{{ route('user.new.video', $course->title) }}"
                             class=" btn color-two button text-white">VIEW</a>
                         @endif
                         @if ($course->title == 'IAS BOOSTER COURSE (P)')
                         <a href="{{ route('user.new.video', $course->title) }}"
                             class=" btn color-two button text-white">VIEW</a>
                         @endif
                         @if ($course->title == 'IAS BOOSTER COURSE (Q)')
                         <a href="{{ route('user.new.video', $course->title) }}"
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
                         <h4>PPTS</h4>
                         <a href="{{ route('user.advanced.batch(c).classppt') }}"
                             class=" btn color-two button text-white">View</a>
                     </div>
                 </div>
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
             <!--@if ($course->title == 'IAS BOOSTER COURSE (D)')-->
             <!--    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">-->
             <!--        <div class="single-features-light text-center">-->
             <!-- single features -->
             <!--            <div>-->
             <!--                <i class="base-color fas fa-book fa-3x"></i>-->
             <!--                <h4>PPTS</h4>-->
             <!--                <a href="{{ route('user.advanced.batch(c).classppt') }}"-->
             <!--                    class=" btn color-two button text-white">View</a>-->
             <!--            </div>-->
             <!--        </div>-->
             <!--    </div>-->
             <!--@endif-->
             <!--@if ($course->title == 'IAS BOOSTER COURSE (E)')-->
             <!--    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">-->
             <!--        <div class="single-features-light text-center">-->
             <!-- single features -->
             <!--            <div>-->
             <!--                <i class="base-color fas fa-book fa-3x"></i>-->
             <!--                <h4>PPTS</h4>-->
             <!--                <a href="{{ route('user.advanced.batch(c).classppt') }}"-->
             <!--                    class=" btn color-two button text-white">View</a>-->
             <!--            </div>-->
             <!--        </div>-->
             <!--    </div>-->
             <!--@endif-->
             <!--@if ($course->title == 'IAS ADVANCED BATCH 2024 (B)')-->
             <!--    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">-->
             <!--        <div class="single-features-light text-center">-->
             <!-- single features -->
             <!--            <div>-->
             <!--                <i class="base-color fas fa-book fa-3x"></i>-->
             <!--                <h4>PPTS</h4>-->
             <!--                <a href="{{ route('user.advanced.batch(c).classppt') }}"-->
             <!--                    class=" btn color-two button text-white">View</a>-->
             <!--            </div>-->
             <!--        </div>-->
             <!--    </div>-->
             <!--@endif-->
             <!--@if ($course->title == 'IAS BOOSTER COURSE (C)')-->
             <!--    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">-->
             <!--        <div class="single-features-light text-center">-->
             <!-- single features -->
             <!--            <div>-->
             <!--                <i class="base-color fas fa-book fa-3x"></i>-->
             <!--                <h4>PPTS</h4>-->
             <!--                <a href="{{ route('user.advanced.batch(c).classppt') }}"-->
             <!--                    class=" btn color-two button text-white">View</a>-->
             <!--            </div>-->
             <!--        </div>-->
             <!--    </div>-->
             <!--@endif-->
             <!--@if ($course->title == 'IAS BOOSTER COURSE (D)')-->
             <!--    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">-->
             <!--        <div class="single-features-light text-center">-->
             <!-- single features -->
             <!--            <div>-->
             <!--                <i class="base-color fas fa-book fa-3x"></i>-->
             <!--                <h4>PPTS</h4>-->
             <!--                <a href="{{ route('user.advanced.batch(c).classppt') }}"-->
             <!--                    class=" btn color-two button text-white">View</a>-->
             <!--            </div>-->
             <!--        </div>-->
             <!--    </div>-->
             <!--@endif-->
             <!--@if ($course->title == 'IAS ADVANCED BATCH (C)')-->
             <!--<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">-->
             <!--    <div class="single-features-light text-center">-->
             <!--        <div>-->
             <!--            <i class="base-color fas fa-book fa-3x"></i>-->
             <!--            <h4>PPTS</h4>-->
             <!--            <a href="{{ route('user.advanced.batch(c).classppt') }}"-->
             <!--                class=" btn color-two button text-white">View</a>-->
             <!--        </div>-->
             <!--    </div>-->
             <!--</div>-->
             <!--@endif-->
             <!--@if ($course->title == 'IAS ADVANCED BATCH 2023 (B)')-->
             <!--    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">-->
             <!--        <div class="single-features-light text-center">-->
             <!-- single features -->
             <!--            <div>-->
             <!--                <i class="base-color fas fa-book fa-3x"></i>-->
             <!--                <h4>PPTS</h4>-->
             <!--                <a href="{{ route('user.advanced.batch(c).classppt') }}"-->
             <!--                    class=" btn color-two button text-white">View</a>-->
             <!--            </div>-->
             <!--        </div>-->
             <!--    </div>-->
             <!--@endif-->
             <!--@if ($course->title == 'IAS ADVANCED BATCH 2024')-->
             <!--    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">-->
             <!--        <div class="single-features-light text-center">-->
             <!-- single features -->
             <!--            <div>-->
             <!--                <i class="base-color fas fa-book fa-3x"></i>-->
             <!--                <h4>PPTS</h4>-->
             <!--                <a href="{{ route('user.advanced.batch(c).classppt') }}"-->
             <!--                    class=" btn color-two button text-white">View</a>-->
             <!--            </div>-->
             <!--        </div>-->
             <!--    </div>-->
             <!--@endif-->
             <!--@if ($course->title == 'IAS ADVANCED BATCH 2024 (A)')-->
             <!--    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">-->
             <!--        <div class="single-features-light text-center">-->
             <!-- single features -->
             <!--            <div>-->
             <!--                <i class="base-color fas fa-book fa-3x"></i>-->
             <!--                <h4>PPTS</h4>-->
             <!--                <a href="{{ route('user.advanced.batch(c).classppt') }}"-->
             <!--                    class=" btn color-two button text-white">View</a>-->
             <!--            </div>-->
             <!--        </div>-->
             <!--    </div>-->
             <!--@endif-->
             <!--@if ($course->title == 'IAS ADVANCED BATCH')-->
             <!--    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">-->
             <!--        <div class="single-features-light text-center">-->
             <!-- single features -->
             <!--            <div>-->
             <!--                <i class="base-color fas fa-book fa-3x"></i>-->
             <!--                <h4>PPTS</h4>-->
             <!--                <a href="{{ route('user.advanced.batch(c).classppt') }}"-->
             <!--                    class=" btn color-two button text-white">View</a>-->
             <!--            </div>-->
             <!--        </div>-->
             <!--    </div>-->
             <!--@endif-->
             <!--@if ($course->title == 'IAS ADVANCED BATCH (MORNING)')-->
             <!--    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">-->
             <!--        <div class="single-features-light text-center">-->
             <!-- single features -->
             <!--            <div>-->
             <!--                <i class="base-color fas fa-book fa-3x"></i>-->
             <!--                <h4>PPTS</h4>-->
             <!--                <a href="{{ route('user.advanced.batch(c).classppt') }}"-->
             <!--                    class=" btn color-two button text-white">View</a>-->
             <!--            </div>-->
             <!--        </div>-->
             <!--    </div>-->
             <!--@endif-->
             <!--@if ($course->title == 'IAS ADVANCED BATCH 2022')-->
             <!--    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">-->
             <!--        <div class="single-features-light text-center">-->
             <!-- single features -->
             <!--            <div>-->
             <!--                <i class="base-color fas fa-book fa-3x"></i>-->
             <!--                <h4>PPTS</h4>-->
             <!--                <a href="{{ route('user.advanced.batch(c).classppt') }}"-->
             <!--                    class=" btn color-two button text-white">View</a>-->
             <!--            </div>-->
             <!--        </div>-->
             <!--    </div>-->
             <!--@endif-->
             <!--@if ($course->title == 'advancedbatch2022(f-2)')-->
             <!--    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">-->
             <!--        <div class="single-features-light text-center">-->
             <!-- single features -->
             <!--            <div>-->
             <!--                <i class="base-color fas fa-book fa-3x"></i>-->
             <!--                <h4>PPTS</h4>-->
             <!--                <a href="{{ route('user.advanced.batch(c).classppt') }}"-->
             <!--                    class=" btn color-two button text-white">View</a>-->
             <!--            </div>-->
             <!--        </div>-->
             <!--    </div>-->
             <!--@endif-->
             <!--@if ($course->title == 'IAS FOUNDATION BATCH 2023')-->
             <!--    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">-->
             <!--        <div class="single-features-light text-center">-->
             <!-- single features -->
             <!--            <div>-->
             <!--                <i class="base-color fas fa-book fa-3x"></i>-->
             <!--                <h4>PPTS</h4>-->
             <!--                <a href="{{ route('user.advanced.batch(c).classppt') }}"-->
             <!--                    class=" btn color-two button text-white">View</a>-->
             <!--            </div>-->
             <!--        </div>-->
             <!--    </div>-->
             <!--@endif-->
             <!--@if ($course->title == 'foundation2023(b-2)')-->
             <!--    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">-->
             <!--        <div class="single-features-light text-center">-->
             <!-- single features -->
             <!--            <div>-->
             <!--                <i class="base-color fas fa-book fa-3x"></i>-->
             <!--                <h4>PPTS</h4>-->
             <!--                <a href="{{ route('user.advanced.batch(c).classppt') }}"-->
             <!--                    class=" btn color-two button text-white">View</a>-->
             <!--            </div>-->
             <!--        </div>-->
             <!--    </div>-->
             <!--@endif-->
             <!--@if ($course->title == 'IAS TARGET BATCH 2022')-->
             <!--    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">-->
             <!--        <div class="single-features-light text-center">-->
             <!-- single features -->
             <!--            <div>-->
             <!--                <i class="base-color fas fa-book fa-3x"></i>-->
             <!--                <h4>PPTS</h4>-->
             <!--                <a href="{{ route('user.advanced.batch(c).classppt') }}"-->
             <!--                    class=" btn color-two button text-white">View</a>-->
             <!--            </div>-->
             <!--        </div>-->
             <!--    </div>-->
             <!--@endif-->
             <!--@if ($course->title == 'IAS ADVANCED BATCH 2022 (BATCH 2)')-->
             <!--    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">-->
             <!--        <div class="single-features-light text-center">-->
             <!-- single features -->
             <!--            <div>-->
             <!--                <i class="base-color fas fa-book fa-3x"></i>-->
             <!--                <h4>PPTS</h4>-->
             <!--                <a href="{{ route('user.target.2022.(batch2).ppt') }}"-->
             <!--                    class=" btn color-two button text-white">View</a>-->
             <!--            </div>-->
             <!--        </div>-->
             <!--    </div>-->
             <!--@endif-->
             <!--@if ($course->title == 'IAS FOUNDATION BATCH 2024')-->
             <!--    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">-->
             <!--        <div class="single-features-light text-center">-->
             <!-- single features -->
             <!--            <div>-->
             <!--                <i class="base-color fas fa-book fa-3x"></i>-->
             <!--                <h4>PPTS</h4>-->
             <!--                <a href="{{ route('user.advanced.batch(c).classppt') }}"-->
             <!--                    class=" btn color-two button text-white">View</a>-->
             <!--            </div>-->
             <!--        </div>-->
             <!--    </div>-->
             <!--@endif-->
             <!--@if ($course->title == 'IAS ADVANCED BATCH 2023')-->
             <!--    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">-->
             <!--        <div class="single-features-light text-center">-->
             <!-- single features -->
             <!--            <div>-->
             <!--                <i class="base-color fas fa-book fa-3x"></i>-->
             <!--                <h4>PPTS</h4>-->
             <!--                <a href="{{ route('user.advanced.batch(c).classppt') }}"-->
             <!--                    class=" btn color-two button text-white">View</a>-->
             <!--            </div>-->
             <!--        </div>-->
             <!--    </div>-->
             <!--@endif-->
             <!--@if ($course->title == 'IAS FOUNDATION BATCH 2023 (BATCH-2)')-->
             <!--    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">-->
             <!--        <div class="single-features-light text-center">-->
             <!-- single features -->
             <!--            <div>-->
             <!--                <i class="base-color fas fa-book fa-3x"></i>-->
             <!--                <h4>PPTS</h4>-->
             <!--                <a href="{{ route('user.advanced.batch(c).classppt') }}"-->
             <!--                    class=" btn color-two button text-white">View</a>-->
             <!--            </div>-->
             <!--        </div>-->
             <!--    </div>-->
             <!--@endif-->
             <!--@if ($course->title == 'IAS ADVANCED BATCH 2023 (A)')-->
             <!--    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">-->
             <!--        <div class="single-features-light text-center">-->
             <!-- single features -->
             <!--            <div>-->
             <!--                <i class="base-color fas fa-book fa-3x"></i>-->
             <!--                <h4>PPTS</h4>-->
             <!--                <a href="{{ route('user.advanced.batch(c).classppt') }}"-->
             <!--                    class=" btn color-two button text-white">View</a>-->
             <!--            </div>-->
             <!--        </div>-->
             <!--    </div>-->
             <!--    @if ($course->title == 'IAS ADVANCED BATCH 2024')-->
             <!--        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">-->
             <!--            <div class="single-features-light text-center">-->
             <!-- single features -->
             <!--                <div>-->
             <!--                    <i class="base-color fas fa-book fa-3x"></i>-->
             <!--                    <h4>PPTS</h4>-->
             <!--                    <a href="{{ route('user.advanced.batch(c).classppt') }}"-->
             <!--                        class=" btn color-two button text-white">View</a>-->
             <!--                </div>-->
             <!--            </div>-->
             <!--        </div>-->
             <!--    @endif-->
             <!--    @if ($course->title == 'IAS ADVANCED BATCH 2024 (A)')-->
             <!--        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">-->
             <!--            <div class="single-features-light text-center">-->
             <!-- single features -->
             <!--                <div>-->
             <!--                    <i class="base-color fas fa-book fa-3x"></i>-->
             <!--                    <h4>PPTS</h4>-->
             <!--                    <a href="{{ route('user.advanced.batch(c).classppt') }}"-->
             <!--                        class=" btn color-two button text-white">View</a>-->
             <!--                </div>-->
             <!--            </div>-->
             <!--        </div>-->
             <!--    @endif-->
             @endif
             <!-- 100 current affairs -->


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
             <!-- REPORTS AND INDICES 2022 COMPILATION Current Affairs 2023-->
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
             @else
             <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">
                 <div class="single-features-light text-center">
                     <!-- single features -->
                     <div>
                         <i class="base-color fas fa-book fa-3x"></i>
                         <h4>ACS MATERIAL</h4>
                         <a href="{{ route('user.acs+.material') }}" class=" btn color-two button text-white">View</a>
                     </div>
                 </div>
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
                         <h4>RECORDED CLASSES</h4>
                         <a href="{{ route('user.class.video.index', $course->title) }}"
                             class=" btn color-two button text-white">View</a>
                     </div>
                 </div>
             </div>
             <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mt-3">
                 <div class="single-features-light text-center">
                     <!-- single features -->
                     <div>
                         <i class="base-color fas fa-book fa-3x"></i>
                         <h4>PPTS</h4>
                         <a href="{{ route('user.acs+.classppt') }}" class=" btn color-two button text-white">View</a>
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