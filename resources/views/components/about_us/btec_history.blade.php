<!-- faculty-of-pedagogy-research -->
<div class="it-about-4-area  inner-about-style pt-120 pb-120">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-6 col-lg-6">
                <div class="it-about-3-title-box">
                    <span class="it-section-subtitle">
                        <img src="{{ asset('assets/img/category/inner.svg') }}" alt="">
                        About us
                    </span>
                    <h2 class="it-section-title-3 pb-30">History Of <span>Battambang Teacher Education College</span></h2>
                    <h2 class="it-section-title-2 pb-5 mb-1">Year: <span>1979 - Present</span></h2>
                    <div class="pl-50 mb-30">
                        <p class="mt-1"><li> In 1979 - <strong>Battambang Teacher Education College</strong>, formerly known as the <strong>Provincial Teacher Training Center</strong>, is located on the campus of Net Yang High School and was authorized to conduct the first training on December 15, 1979.</li></p>
                        <p><li> In 1982, the <strong>Provincial Teacher Training Center</strong> was relocated to the current location of the current Battambang Teacher Education College (Campus 1), which was then the former Aep Khut High School.</li></p>
                        <p><li> In 1983, the <strong>Provincial Teacher Training Center</strong> was divided into two: the <strong>Battambang Provincial Teacher Training Center</strong> to train primary school teachers and the <strong>Battambang Regional Teacher Training Center</strong> to train lower secondary school teachers.</li></p>
                        <p><li> In 1998, the <strong> Provincial Teacher Training Center</strong> was relocated to O'Khchay Village, Prek Preah Sdach Commune, Svay Por District, Battambang Province, where the current Battambang Teacher Education College (campus 2) was located in November 1998 while the <strong>Battambang Regional Teacher Training Center</strong> maintains its original location, which was the site of the Battambang Teacher Education College (Campus 1).</li></p>
                        <p><li> In 2017, the <strong>Battambang Teacher Education College</strong> was established with the status of department through Sub-Decree No. 72, dated May 22, 2017, by merging between the Battambang Regional Teacher Training Center and the Battambang Provincial Teacher Training Center.</li></p>
                        <p><li> In 2021, the <strong>Battambang Teacher Education College</strong> was promoted by the Royal Government of Cambodia to the status of general department (Higher Education Institution) by Sub-Decree No. 203, dated October 19, 2021.</li></p>

                    </div>
                </div>
            </div>
                    
            <div class="col col-xl-6 col-lg-6">          {{-- image time line --}}
            <section style="background-color: #F0F2F5;">
              <div class="container py-2">
                <div class="main-timeline-2">
                  <div class="timeline-2 right-2">
                    <div class="card">
                      <img src="assets/img/history/1.jpg" class="card-img-top"
                        alt="Responsive image">
                      <div class="card-body p-2">
                        {{-- <h4 class="fw-bold mb-2"> Quis autem vel eum voluptate</h4> --}}
                        <p class="text-muted mb-2"><i class="far fa-clock" aria-hidden="true"></i> 1988</p>
                      </div>
                    </div>
                  </div>

                  <div class="timeline-2 right-2">
                    <div class="card">
                      <img src="assets/img/history/5.jpg" class="card-img-top"
                        alt="Responsive image">
                      <div class="card-body p-2">
                        {{-- <h4 class="fw-bold mb-2"> Quis autem vel eum voluptate</h4> --}}
                        <p class="text-muted mb-2"><i class="far fa-clock" aria-hidden="true"></i> 1988</p>
                      </div>
                    </div>
                  </div>

                  <div class="timeline-2 right-2">
                    <div class="card">
                      <img src="assets/img/history/12.jpg" class="card-img-top"
                        alt="Responsive image">
                      <div class="card-body p-2">
                        {{-- <h4 class="fw-bold mb-2"> Quis autem vel eum voluptate</h4> --}}
                        <p class="text-muted mb-2"><i class="far fa-clock" aria-hidden="true"></i></p>
                      </div>
                    </div>
                  </div>
                  
                </div>
              </div>
            </section>
            </div> 
        {{-- end --}}
        </div>
    </div>
</div>

<style>
 /* The actual timeline (the vertical ruler) */
.main-timeline-2 {
  position: relative;
}

/* The actual timeline (the vertical ruler) */
.main-timeline-2::after {
  content: "";
  position: absolute;
  width: 3px;
  background-color: #26c6da;
  top: 0;
  bottom: 0;
  left: 10%;
  margin-left: -3px;
}

/* Container around content */
.timeline-2 {
  position: relative;
  background-color: inherit;
  width: 70%;
}

/* The circles on the timeline */
.timeline-2::after {
  content: "";
  position: absolute;
  width: 25px;
  height: 25px;
  right: -11px;
  background-color: #26c6da;
  top: 15px;
  border-radius: 50%;
  z-index: 1;
}

/* Place the container to the left */

/* Place the container to the right */
.right-2 {
  padding: 0px 0px 20px 40px;
  left: 10%;
}

/* Add arrows to the left container (pointing right) */
.left-2::before {
  content: " ";
  position: absolute;
  top: 18px;
  z-index: 1;
  right: 30px;
  border: medium solid white;
  border-width: 10px 0 10px 10px;
  border-color: transparent transparent transparent white;
}

/* Add arrows to the right container (pointing left) */
.right-2::before {
  content: " ";
  position: absolute;
  top: 18px;
  z-index: 1;
  left: 30px;
  border: medium solid white;
  border-width: 10px 10px 10px 0;
  border-color: transparent white transparent transparent;
}

/* Fix the circle for containers on the right side */
.right-2::after {
  left: -14px;
}

/* Media queries - Responsive timeline on screens less than 600px wide */
@media screen and (max-width: 600px) {
  /* Place the timelime to the left */
  .main-timeline-2::after {
    left: 31px;
  }

  /* Full-width containers */
  .timeline-2 {
    width: 100%;
    padding-left: 70px;
    padding-right: 25px;
  }

  /* Make sure that all arrows are pointing leftwards */
  .timeline-2::before {
    left: 60px;
    border: medium solid white;
    border-width: 10px 10px 10px 0;
    border-color: transparent white transparent transparent;
  }

  /* Make sure all circles are at the same spot */
  .left-2::after,
  .right-2::after {
    left: 18px;
  }

  .left-2::before {
    right: auto;
  }

  /* Make all right containers behave like the left ones */
  .right-2 {
    left: 0%;
  }
}
</style>
