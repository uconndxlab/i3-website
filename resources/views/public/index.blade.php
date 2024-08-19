@extends('layout')

@push('head-css')
<link rel="stylesheet" href="/aos-master/dist/aos.css">
@endpush

@section('content')
<div class="container hero py-10">
    {{-- <h1 class="hero-header">Internal Insights <br>& Innovation</h1> --}}
    <div class="subheader" style="display:flex; align-items:center;">
      <div class="" style="display:flex;flex-direction:column;">
        <span class="dot" style="background-color:var(--accent-1)"></span>
        <span class="dot" style="background-color:var(--accent-2)"></span>
        <span class="dot" style="background-color:var(--accent-3)"></span>
      </div>
      <div style="height: 7rem;" class="d-flex align-items-center ps-2">
        <h2 class="typewrite-static-text" style="margin:0;margin-top:0.64rem;color:var(--black)">We <span href="" class="typewrite" data-period="2000" data-type='[ "create websites", "build systems", "explore technology", "implement solutions","develop apps" ]'>develop apps</span><span class="type-cursor" id="typeCursor">|</span> for UConn.</h2>
      </div>
      
        
    </div>
  </div>    

  <div class="position-relative overflow-hidden">
    <div class="about text-white">
        <div class="container intro-text py-7">
          <div class="row d-flex align-items-center justify-content-center">
            <div class="col-md-6">
              <h2 data-aos="fade-left" class= "display-header mb-5 text-white panel" data-color="color-3">What is [i3]?</h2>
              <p data-aos="fade-left" class= "panel" data-color="color-4">At i3, our mission is to help UConn thrive by building custom software and web products and facilitating the utilization of existing resources in support of UConn's business processes, academic operations, and research enterprise.</p>
              <p data-aos="fade-left" >We're not trying to reinvent the wheel. Sometimes, we simply show our colleagues where to find the wheel -- or how to use it -- helping them identify and leverage the resources that already exist at UConn.</p>
              <p data-aos="fade-left">But sometimes, the wheel isn't the right tool for the job. In those cases, with a lean and agile approach, we build, test, and iterate to ensure our solutions meet the ever-evolving needs of the university community.</p>
            </div>
            <div class="col-md-6 mb-2" style="position:relative">
              <img style="object-fit:contain;" data-aos="fade-left"  src="/img/bin-i3.svg" width="100%" height="500px" alt="i3 logo in binary">
              <img style="object-fit:contain;padding:0px 0px;position:absolute;" class="circle circle-outside" src="img/bin-i3-outside.svg" width="100%" height="500px" alt="decoration outside logo">
            </div>
          </div>
        </div>
      </div>
  </div>
  

  <div class="position-relative overflow-x-hidden">
    <div class="subunit container position-relative py-15">
        <div class="circle circle1"></div>
        <div class="circle circle2"></div>
        <h2 data-aos="fade-up" class="display-header mb-5" style="color:var(--accent-3)">Explore Our Subunits</h2>
        <div class="row">
          <div data-aos="fade-up" class="col-lg-4 mb-4">
            <div class="card display-card" style="background:#EDF9FF;border-top:8px solid var(--accent-1)!important;">
              <div class="card-body">
                <p><span class="badge pt-2" style="background-color:var(--black)">For UConn and Beyond</span></p>
                <h5 class="card-title">Cubed Labs (❒ labs)</h5>
                <p class="card-text">We partner with UConn departments to enhance their systems through tailored digital solutions. Whether it's developing custom tools or optimizing existing resources, our goal is to simplify and improve the experience for UConn faculty, staff, and students.</p>
              </div>
            </div>
          </div>
          <div data-aos="fade-up" class="col-lg-4 mb-4">
            <div class="card display-card" style="background:#E5F2FD;border-top:8px solid var(--accent-2)!important;">
              <div class="card-body">
                <p><span class="badge pt-2" style="background-color:var(--black)">For Researchers</span></p>
                <h5 class="card-title">The Digital Experience Group (DXG)</h5>
                <p class="card-text">The Digital Experience Group (DXG) is a core facility dedicated to supporting the UConn research community. We provide top-tier app development, web design, UI/UX design, and other innovative technology services, helping researchers bring their projects to life with cutting-edge digital solutions.</p>

                <div class="btn display-btn btn-arrow-slide"> <a href="https://dxgroup.core.uconn.edu/" class="btn-arrow-slide-cont btn-arrow-slide-cont--blue" style="width:230px"> <span class="btn-arrow-slide-circle" aria-hidden="true"> <span class="btn-arrow-slide-arrow btn-arrow-slide-icon"></span> </span> <span class="btn-arrow-slide-text"> Learn about DXG </span> </a> </div>
              </div>
            </div>
          </div>
          <div data-aos="fade-up" class="col-lg-4 mb-4">
            <div class="card display-card" style="background:#E5EDFB;border-top:8px solid var(--accent-3)!important;">
              <div class="card-body">
                <p><span class="badge pt-2" style="background-color:var(--black)">For The Future</span></p>
                <h5 class="card-title">Strategic Insights and Modeling Lab (SIMLab)</h5>
                <p class="card-text">SIMLab is an ad-hoc working group of faculty and staff aimed at advancing UConn's academic operations through data-driven simulations and collaborative research.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
  </div>
  

  <div class="circle circle3"></div>

  <div class="work text-white py-15 position-relative" id="our-work">
    <div class="container">
      <h2 data-aos="fade-left" class="text-white display-header mb-5">See Our Work</h2>

      <div id="our-work-filter-container">
        <ul class="nav nav-pills filter-pills position-relative mb-4">
            <li class="nav-item">
                <button class="nav-link text-white fw-bold has-background">All Work</button>
            </li>
            <li class="nav-item">
                <button class="nav-link text-white fw-bold" data-color="var(--accent-2)" data-filter="research">Research Focus</button>
            </li>
            <li class="nav-item">
                <button class="nav-link text-white fw-bold" data-color="var(--accent-2)" data-filter="internal">Internal Focus</button>
            </li>
            <div class="pill-background position-absolute bg-primary"></div>
        </ul>
      </div>
        <div id="work-results">
            <div class="row">

                @php
                $work = [
                    ['title' => 'Stamford Data Science', 'filter' => 'internal', 'image' => '/img/work/sdsi.png', 'template' => 'projects.sdsi'],
                    ['title' => 'NSF Grant Map', 'filter' => 'internal', 'image' => '/img/work/nsf.png', 'template' => 'projects.nsf'],
                    ['title' => 'WellSCAN', 'filter' => 'research', 'image' => '/img/work/wellscan.png', 'template' => 'projects.wellscan'],
                    ['title' => 'UConn UCEDD', 'filter' => 'internal', 'image' => '/img/work/ucedd.png', 'template' => 'projects.ucedd'],
                    ['title' => 'Sourcery', 'filter' => 'research', 'image' => '/img/work/sourcery.png', 'template' => 'projects.sourcery'],
                    ['title' => 'CFNI Calculator', 'filter' => 'research', 'image' => '/img/work/cfni.png', 'template' => 'projects.cfni'],
                    ['title' => 'Financial Game', 'filter' => 'research', 'image' => '/img/work/financial-game.png', 'template' => 'projects.financial-game'],
                    ['title' => 'Voice Switch/Brain Switch', 'filter' => 'research', 'image' => '/img/work/brain-switch.png', 'template' => 'projects.brain-switch'],
                    ['title' => 'Access2Ag', 'filter' => 'research', 'image' => '/img/work/access2ag.png', 'template' => 'projects.access2ag'],
                    ['title' => 'UConn NRCA', 'filter' => 'internal', 'image' => '/img/work/nrca.png', 'template' => 'projects.nrca'],
                    ['title' => 'Physiology & Neurobiology', 'filter' => 'research', 'image' => '/img/work/PNB.png', 'template' => 'projects.pnb'],
                    ['title' => 'Covid Surveillance Testing', 'filter' => 'internal', 'image' => '/img/work/covid-testing.png', 'template' => 'projects.covid-testing'],
                    ['title' => 'CMOT', 'filter' => 'research', 'image' => '/img/work/cmot.png', 'template' => 'projects.cmot'],
                    ['title' => 'DMCT', 'filter' => 'research', 'image' => '/img/work/dmct.png', 'template' => 'projects.dmct'],
                    ['title' => 'Rain Garden', 'filter' => 'research', 'image' => '/img/work/rain-garden.png', 'template' => 'projects.rain-garden'],
                    ['title' => 'Turfgrass Application', 'filter' => 'research', 'image' => '/img/work/turfgrass.png', 'template' => 'projects.turfgrass'],
                    ['title' => 'Research Insights for Faculty', 'filter' => 'internal', 'template' => 'projects.rif', 'image' => '/img/work/research-insights.png' ],
                    ['title' => 'Faculty Salary Lookup', 'filter' => 'internal', 'template' => 'projects.fac-sal-lookup'],
                    ['title' => 'Travel Funds', 'filter' => 'internal', 'template' => 'projects.travelfunds', 'image' => '/img/work/travel-funds.png'],
                    ['title' => 'QuantumCT', 'filter' => 'internal', 'template' => 'projects.quantumct', 'image' => '/img/work/quantum.png'],
                    ['title' => 'Nexus', 'filter' => 'internal', 'template' => 'projects.nexus', 'image' => '/img/work/nexus.png'],
                    ['title' => 'Syllabus', 'filter' => 'internal', 'template' => 'projects.syllabus'],
                    ['title' => 'Werth Institute', 'filter' => 'internal', 'template' => 'projects.werth', 'image' => '/img/work/werth.png'],
                    ['title' => 'Hiring Maps', 'filter' => 'research', 'template' => 'projects.hiring-maps', 'image' => '/img/work/hiring-maps.png'],
                    ['title' => 'Extension Publications', 'filter' => 'research', 'template' => 'projects.extension-pubs', 'image' => '/img/work/extension.png'],
                    ['title' => 'Statistical Consulting', 'filter' => 'research', 'template' => 'projects.stat-consult', 'image' => '/img/work/scs.png'],
                    ['title' => 'COR2E Website', 'filter' => 'internal', 'template' => 'projects.cor2e', 'image' => '/img/work/core.png'],
                    ['title' => 'Ecoregions', 'filter' => 'research', 'template' => 'projects.ecoregions', 'image' => '/img/work/ecoregions.png'],
                    ['title' => 'Gant Shark Illustrations', 'filter' => 'internal', 'image' => '/img/work/shark-illustration.jpg', 'template' => 'projects.shark-illustrations'],
                    ['title' => 'Panademic Journaling Project', 'filter' => 'research', 'template' => 'projects.pandemic-journaling', 'image' => '/img/work/pandemic-journaling.png'],
                    ['title' => 'New England Crop Insurance App', 'filter' => 'research', 'template' => 'projects.crop-insurance'],
                    ['title' => 'Annual Report Print Design', 'filter' => 'internal', 'template' => 'projects.annual-report-print-design'],
                    // ['title' => 'CT Remembers', 'filter' => 'research', 'template' => 'projects.film-poster-design'],
                ];
                @endphp


                @foreach($work as $i => $w)
                <div class="col-12 col-sm-6 col-md-6 col-lg-4 mb-4 work-item position-relative" data-aos="flip-right" data-filter="{{ $w['filter'] }}"  data-aos-anchor="#our-work">
                    <div class="position-absolute start-0 end-0 d-flex align-items-center justify-content-center work-item-overlay text-center w-100" @if ( isset($w['template']) ) data-bs-toggle="modal" data-bs-target="#workModal{{$i}}"  @endif >
                        <h4 class="text-white">{{ $w['title'] }}</h4>
                    </div>
                    <img src="{{ $w['image'] ?? 'img/plalceholder.png' }}" loading="lazy" data-aos-anchor="#our-work">
                </div>
                @if ( isset($w['template']) )
                    <x-dynamic-component :component="$w['template']" modal-id="workModal{{$i}}" />
                @endif
                @endforeach
            </div>
        </div>
      
    </div>

    <div id="see-our-work-expand">
        <div class="d-flex w-100 justify-content-center align-items-center">
            <div class="btn display-btn btn-arrow-slide"> <button  class="btn-arrow-slide-cont btn-arrow-slide-cont--white" style="width:160px"> <span class="btn-arrow-slide-circle" aria-hidden="true"> <span class="btn-arrow-slide-arrow btn-arrow-slide-icon"></span> </span> <span class="btn-arrow-slide-text"> See More </span> </button> </div>
        </div>
    </div>
  </div>


  <div class="build text-white py-20 position-relative" id="build">
    <div class="binary-background">
      101010101010101010101011101010101001010101010101010101010101010101010101011101010101001010101010101010101010101010101010101011101010101001010101010101010101010101010101010101011101010101001010101010101010101010101010101010101011101010101001010101010101010101010101010101010101011101010101001010101010101010101010101010101010101011101010101001010101010101010101010101010101010101011101010101001010101010101010101010101010101010101011101010101001010101010101010101010101010101010101011101010101001010101010101010101010101010101010101011101010101001010101010101010101010101010101010101011101010101001010101010101010101010101010101010101011101010101001010101010101010101010101010101010101011101010101001010101010101010101010101010101010101011101010101001010101010101010101010101010101010101011101010101001010101010101010101010101010101010101011101010101001010101010101010101010101010101010101011101010101001010101010101010101010101010101010101011101010101001010101010101010101010101010101010101011101010101001010101010101010101010101010101010101011101010101001010101010101010101010101010101010101011101010101001010101010101010101010101010101010101011101010101001010101010101010101010101010101010101011101010101001010101010101010101010101010101010101011101010101001010101010101010101010101010101010101011101010101001010101010101010101010101010101010101011101010101001010101010101010101010101010101010101011101010101001010101010101010101010101010101010101011101010101001010101010101010101010101010101010101011101010101001010101010101010101010101010101010101011101010101001010101010101010101010101010101010101011101010101001010101010101010101010101010101010101011101010101001010101010101010101010101010101010101011101010101001010101010101010101010101010101010101011101010101001010101010101010101010101010101010101011101010101001010101010101010101010101010101010101011101010101001010101010101010101010101010101010101011101010101001010101010101010101010101010101010101011101010101001010101010101010101010101010101010101011101010101001010101010101010101010101010101010101011101010101001010101010101010101010101010101010101011101010101001010101010101010101010101010101010101011101010101001010101010101010101010101010101010101011101010101001010101010101010101010101010101010101011101010101001010101010101010101010101010101010101011101010101001010101010101010101010101010101010101011101010101001010101010101010101010101010101010101011101010101001010101010101010101010101010101010101011101010101001010101010101010101010101010101010101011101010101001010101010101010101010101010101010101011101010101001010101010101010101010101010101010101011101010101001010101010101010101010101010101010101011101010101001010101010101010101010101010101010101011101010101001010101010101010101010101010101010101011101010101001010101010101010101010101010101010101011101010101001010101010101010101010101010101010101011101010101001010101010101010101010101010101010101011101010101001010101010101010101010101010101010101011101010101001010101010101010101010101010101010101011101010101001010101010101010101010101010101010101011101010101001010101010101010101010101010101010101011101010101001010101010101010101010101010101010101011101010101001010101010101010101010101010101010101011101010101001010101010101010101010101010101010101011101010101001010101010101010101010101010101010101011101010101001010101010101010101010101010101010101011101010101001010101010101010101010101010101010101011101010101001010101010101010101010101010101010101011101010101001010101010101010101010101010101010101011101010101001010101010101010101010101010101010101011101010101001010101010101010101010101010101010101011101010101001010101010101010101010101010101010101011101010101001010101010101010101010101010101010101011101010101001010101010101010101010101010101010101011101010101001010101010101010101010101010101010101011101010101001010101010101010101010101010101010101011101010101001010101010101010101010101010101010101011101010101001010101010101010101010101010101010101011101010101001010101010101010101010101010101010101011101010101001010101010101010101010101010101010101011101010101001010101010101010101010101010101010101011101010101001010101010101010101010101010101010101011101010101001010101010101010101010101010101010101011101010101001010101010101010101010101010101010101011101010101001010101010101010101010101010101010101011101010101001010101010101010101010101010101010101011101010101001010101010101010101010101010101010101011101010101001010101010101010101010101010101010101011101010101001010101010101010101010101010101010101011101010101001010101010101010101010101010101010101011101010101001010101010101010101010101010101010101011101010101001010101010101010101010101010101010101011101010101001010101010101010101010101010101010101011101010101001010101010101010101010101010101010101011101010101001010101010101010101010101010101010101011101010101001010101010101010101010101010101010101011101010101001010101010101010101010101010101010101011101010101001010101010101010101010101010101010101011101010101001010101010101010101010101010101010101011101010101001010101010101010101010101010101010101011101010101001010101010101010101010101010101010101011101010101001010101010101010101010101010101010101011101010101001010101010101010101010101010101010101011101010101001010101010101010101010101010101010101011101010101001010101010101010101010101010101010101011101010101001010101010101010101010101010101010101011101010101001010101010101010101010101010101010101011101010101001010101010101010101010101010101010101011101010101001010101010101010101010101010101010101011101010101001010101010101010101010101010101010101011101010101001010101010101010101010101010101010101011101010101001010101010101010101010101010101010101011101010101001010101010101010101010101010101010101011101010101001010101010101010101010101010101010101011101010101001010101010101010101010101010101010101011101010101001010101010101010101010101010101010101011101010101001010101010101010101010101010101010101011101010101001010101010101010101010101010101010101011101010101001010101010101010101010101010101010101011101010101001010101010101010101010101010101010101011101010101001010101010101010101010101010101010101011101010101001010101010101010101010101010101010101011101010101001010101010101010101010101010101010101011101010101001010101010101010101010101010101010101011101010101001010101010101010101010101010101010101011101010101001010101010101010101010101010101010101011101010101001010101010101010101010101010101010101011101010101001010101010101010101010101010101010101011101010101001010101010101010101010101010101010101011101010101001010101010101010101010101010101010101011101010101001010101010101010101010101010101010101011101010101001010101010101010101010101010101010101011101010101001010101010101010101010101010101010101011101010101001010101010101010101010101010101010101011101010101001010101010101010101010101010101010101011101010101001010101010101010101010101010101010101011101010101001010101010101010101010101010101010101011101010101001010101010101010101010101010101010101011101010101001010101010101010101010101010101010101011101010101001010101010101010101010101010101010101011101010101001010101010101010101010101010101010101011101010101001010101010101010101010101010101010101011101010101001010101010101010101010101010101010101011101010101001010101010101010101010101010101010101011101010101001010101010101010101010101010101010101011101010101001010101010101010101010101010101010101011101010101001010101010101010101010101010101010101011101010101001010101010101010101010101010101010101011101010101001010101010101010101010101010101010101011101010101001010101010101010101010101010101010101011101010101001010101010101010101010101010101010101011101010101001010101010101010101010101010101010101011101010101001010101010101010101010101010101010101011101010101001010101010101010101010101010101010101011101010101001010101010101010101010101010101010101011101010101001010101010101010101010101010101010101011101010101001010101010101010101010101010101010101011101010101001010101010101010101010101010101010101011101010101001010101010101010101010101010101010101011101010101001010101010101010101010101010101010101011101010101001010101010101010101010101010101010101011101010101001010101010101010101010101010101010101011101010101001010101010101010101010101010101010101011101010101001010101010101010101010101010101010101011101010101001010101010101010101010101010101010101011101010101001010101010101010101010101010101010101011101010101001010101010101010101010101010101010101011101010101001010101010101010101010101010101010101011101010101001010101010101010101010101010101010101011101010101001010101010101010101010101010101010101011101010101001010101010101010101010101010101010101011101010101001010101010101010101010101010101010101011101010101001010101010101010101010101010101010101011101010101001010101010101010101010101010101010101011101010101001010101010101010101010101010101010101011101010101001010101010101010101010101010101010101011101010101001010101010101010101010101010101010101011101010101001010101010101010101010101010101010101011101010101001010101010101010101010101010101010101011101010101001010101010101010101010101010101010101011101010101001010101010101010101010101010101010101011101010101001010101010101010101010101010101010101011101010101001010101010101010101010101010101010101011101010101001010101010101010101010101010101010101011101010101001010101010101010101010101010101010101011101010101001010101010101010101010101010101010101011101010101001010101010101010101010101010101010101011101010101001010101010101010101010101010101010101011101010101001010101010101010101010101010101010101011101010101001010101010101010101010101010101010101011101010101001010101010101010101010101010101010101011101010101001010101010101010101010101010101010101011101010101001010101010101010101010101010101010101011101010101001010101010101010101010101010101010101011101010101001010101010101010101010101010101010101011101010101001010101010101010101010101010101010101011101010101001010101010101010</div>
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <h2 data-aos="fade-right" class="text-white display-header mb-4">Help Us Build</h2>
          <h4 data-aos="fade-right" class="text-white">Join us in creating innovative solutions for UConn!</h4>
          <p data-aos="fade-right">Software is only a small piece of the puzzle - identifying needs and responding to feedback play a much larger role in building successful solutions. Join us in ideating and building the next round of digital tools for UConn and the greater academic population.</p>
          <div data-aos="fade-right" class="btn display-btn btn-arrow-slide"> <a  class="btn-arrow-slide-cont btn-arrow-slide-cont--white" style="width:200px"> <span class="btn-arrow-slide-circle" aria-hidden="true"> <span class="btn-arrow-slide-arrow btn-arrow-slide-icon"></span> </span> <span class="btn-arrow-slide-text"> Coming Soon </span> </a> </div>
        </div>
        <div class="col-lg-4 mb-3" data-aos="flip-right">
          <div class="card display-card" style="background:#E5EDFB;border-top:8px solid var(--accent-2)!important;">
            <div class="card-body">
              <h5 class="card-title">Research Insights for Faculty</h5>
              <p><span class="badge text-bg-primary pt-2">Launched</span></p>
              <p class="card-text">Developed with the Office of the Vice President for Research, this application is designed to provide UConn faculty and their staff with monthly financial reports and other tools to help them review and manage their sponsored project accounts.</p>

              {{-- <a href="https://rif.core.uconn.edu" class="btn btn-primary">Visit RIF</a> --}}
              <div class="btn display-btn btn-arrow-slide"> <a href="https://rif.core.uconn.edu/" target="_blank"
                class="btn-arrow-slide-cont btn-arrow-slide-cont--blue" style="width:160px"> <span
                  class="btn-arrow-slide-circle" aria-hidden="true"> <span
                    class="btn-arrow-slide-arrow btn-arrow-slide-icon"></span> </span> <span
                  class="btn-arrow-slide-text"> Visit RIF </span> </a> </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 mb-3" data-aos="flip-right">
          <div class="card display-card" style="background:#E5EDFB;border-top:8px solid var(--accent-3)!important;">
            <div class="card-body">
              <h5 class="card-title">HoneyCrisp</h5>
              <p><span class="badge text-bg-warning pt-2">In-Progress</span></p>
              <p class="card-text">Designed with core facilities in mind, HoneyCrisp provides a product and service marketplace, along with invoicing, browsing, and payment reconciliation.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <div class="bg-dark text-white py-15" id="team">
    <div class="container">
        <h2 class="text-white display-header mb-4" data-aos="fade-right">The Team</h2>
        <div class="row mb-5">
            <div class="col-md-4 col-sm-6 mb-5" data-aos="fade-right">
                <div class="row">
                    <div class="col-auto">
                        <img loading="lazy" src="/img/people/salisbury.jpg" width="200" class="img-fluid rounded-1" alt="Joel Salisbury">
                    </div>
                    <div class="row name">
                        <h5 class="text-white mt-4">Joel Salisbury</h5>
                        <p>Director of Internal Insights & Innovation</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 mb-5" data-aos="fade-right">
                <div class="row">
                    <div class="col-auto">
                        <img loading="lazy" src="/img/people/kelleher.jpg" class="img-fluid rounded-1" width="200" alt="Brian Kelleher">
                    </div>
                    <div class="row name">
                        <h5 class="text-white mt-4">Brian Kelleher</h5>
                        <p>Senior Applications Developer</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 mb-5" data-aos="fade-right">
                <div class="row">
                    <div class="col-auto">
                        <img loading="lazy" src="/img/people/lacroix.jpg" class="img-fluid rounded-1" width="200" alt="Natalie Lacroix">
                    </div>
                    <div class="row name">
                        <h5 class="text-white mt-4">Natalie Lacroix</h5>
                        <p>Senior UX Designer</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 mb-5" data-aos="fade-right">
                <div class="row">
                    <div class="col-auto">
                        <img loading="lazy" src="/img/people/winston.jpg" class="img-fluid rounded-1" width="200" alt="Jeff Winston">
                    </div>
                    <div class="row name">
                        <h5 class="text-white mt-4">Jeff Winston</h5>
                        <p>Director - Nexus Student Success Platform</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 mb-5" data-aos="fade-right">
                <div class="row">
                    <div class="col-auto">
                        <img loading="lazy" src="/img/people/ameri.JPEG" class="img-fluid rounded-1" width="200" alt="Jon Ameri">
                    </div>
                    <div class="row name">
                        <h5 class="text-white mt-4">Jon Ameri</h5>
                        <p>Web Development Contractor</p>
                    </div>
                </div>
            </div>
        </div>

        <h3 class="text-white mb-4" data-aos="fade-right">Faculty Advisors</h3>
        <div class="row mb-5">
            <div class="col-md-4 col-sm-6 mb-5" data-aos="fade-right">
                <div class="row">
                    <div class="col-auto">
                        <img src="/img/people/daley-400x400.jpg" width="200" class="img-fluid rounded-1" alt="Brian Daley">
                    </div>
                    <div class="row name">
                        <h5 class="text-white mt-4">Brian Daley</h5>
                        <p>Digital Media &amp; Design</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 mb-5" data-aos="fade-right">
                <div class="row">
                    <div class="col-auto">
                        <img src="/img/people/vert.jpg" width="200" class="img-fluid rounded-1" alt="Michael Vertefeuille">
                    </div>
                    <div class="row name">
                        <h5 class="text-white mt-4">Michael Vertefeuille</h5>
                        <p>Digital Media &amp; Design</p>
                    </div>
                </div>
            </div>
        </div>

        @php
        $students = [
            ['name' => 'Denzel Allen', 'title' => 'Student Project Manager', 'linkedin' => 'https://www.linkedin.com/in/denzelallenuconn/', 'link' => null],
            ['name' => 'Lauren Busavage', 'title' => 'Student Web Developer', 'linkedin' => 'https://www.linkedin.com/in/lauren-busavage/', 'link' => null],
            ['name' => 'Ryan Cohutt', 'title' => 'Student UI/UX Designer', 'linkedin' => 'https://www.linkedin.com/in/ryan-cohutt/', 'link' => null],
            ['name' => 'Luna Gonzalez', 'title' => 'Student Illustrator', 'linkedin' => null, 'link' => null],
            ['name' => 'Jack Medrek', 'title' => 'Student Software Developer', 'linkedin' => 'https://www.linkedin.com/in/john-medrek-072a31212/', 'link' => 'johnmedrek.com'],
            ['name' => 'Agatha Michalska', 'title' => 'Student Project Manager', 'linkedin' => 'https://www.linkedin.com/in/agatha-michalska/', 'link' => null],
            ['name' => 'Zoe Orie', 'title' => 'Student UI/UX Designer', 'linkedin' => 'https://www.linkedin.com/in/zoe-orie-84a12a227/', 'link' => 'zoeorie.com'],
            ['name' => 'Kara Rondinelli', 'title' => 'Student UI/UX Designer', 'linkedin' => 'https://www.linkedin.com/in/kara-rondinelli-93708b1b4/', 'link' => 'kararondinelli.com'],
            ['name' => 'Emelia Salmon', 'title' => 'Student UI/UX Designer', 'linkedin' => 'https://www.linkedin.com/in/emelia-salmon-561516232/', 'link' => 'esalmon.com'],
            ['name' => 'Melina Sandel', 'title' => 'Student UI/UX Designer', 'linkedin' => 'https://www.linkedin.com/in/melina-sandel/', 'link' => 'melinasandel.com'],
            ['name' => 'Julian Setiadi', 'title' => 'Student Software Developer', 'linkedin' => 'https://www.linkedin.com/in/juliansetiadi/', 'link' => null],
            ['name' => 'Beth Simmons-Emms', 'title' => 'Student Web Developer', 'linkedin' => null, 'link' => null],
        ];

        @endphp

        <h3 class="text-white mb-4" data-aos="fade-right">Students</h3>
        <div class="row" id="students">
            @foreach($students as $student)
            <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-right">
              <div class="name">
                <h5 class="text-white">{{ $student['name'] }}
                    @if ( $student['linkedin'] )
                    <a href="{{ $student['linkedin'] }}" class="text-white ms-2" target="_blank"><i class="bi bi-linkedin"></i></a>
                    @endif
                </h5>
                <p class="mb-1">{{ $student['title'] }}</p>
                @if ( $student['link'] )
                    <a href="//{{ $student['link'] }}" class="text-light-blue small">{{ $student['link'] }}</a>
                @endif
              </div>
            </div>
            @endforeach
        </div>

        <p class="text-center">Interested in working with us? Send us a message below.</p>
    </div>
  </div>


  <div style="border-top:2px solid var(--black);height:2px;margin-top:20px;"></div>

  <div class="contact" id="contact">
    <div class="container py-15">
      <h2 style="color:var(--accent-3)" data-aos="fade-up" class="display-header mb-5">Contact Us</h2>
      <div class="row">
        <div class="col-12 col-md-6" data-aos="fade-up">
            <form  action="https://formspree.io/dx@uconn.edu" method="POST">
                <div class="row mb-3">
                    <div class="col">
                        <label class="form-label">First Name</label>
                        <input name="_fname" type="text" class="form-control" />
                    </div>
                    <div class="col">
                        <label class="form-label">Last Name</label>
                        <input name="_lname" type="text" class="form-control" />
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label">Your Email</label>
                    <input type="email" name="_replyto" class="form-control" />
                </div>
                <div class="mb-3">
                    <label class="form-label">Your Message</label>
                    <textarea name="message" class="form-control"></textarea>
                </div>

                <div class="btn display-btn btn-arrow-slide"> <button type="submit" class="btn-arrow-slide-cont btn-arrow-slide-cont--blue" style="width:210px"> <span class="btn-arrow-slide-circle" aria-hidden="true"> <span class="btn-arrow-slide-arrow btn-arrow-slide-icon"></span> </span> <span class="btn-arrow-slide-text"> Send Message </span> </button> </div>
              </form>
        </div>
        <div class="col-md-6" data-aos="fade-up">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2973.9964414980072!2d-72.24586914875864!3d41.806837079125955!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89e68a246d788953%3A0xdb58f81f2394f3b0!2s1%20Bishop%20Cir%2C%20Storrs%2C%20CT%2006268!5e0!3m2!1sen!2sus!4v1600991906878!5m2!1sen!2sus"
                width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
                tabindex="0"></iframe>
        </div>
      </div>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
  <script src="/aos-master/dist/aos.js"></script>
<script>
/*background color change*/
$(window).scroll(function() {
  
  // selectors
  var $window = $(window),
      $body = $('.about'),
      $panel = $('.panel');
  
  // Change 50% earlier than scroll position so color is there when you arrive.
  var scroll = $window.scrollTop();
 
  $panel.each(function () {
    var $this = $(this);
    
    // if position is within range of this panel.
    // So position of (position of top of div <= scroll position) && (position of bottom of div > scroll position).
    if ($this.position().top <= scroll && $this.position().top + $this.height() > scroll) {
          
      // Remove all classes on body with color-
      $body.removeClass(function (index, css) {
        return (css.match (/(^|\s)color-\S+/g) || []).join(' ');
      });
       
      // Add class of currently active div
      $body.addClass($(this).data('color'));
    }
  });    
  
}).scroll();

/*typewriter*/
var TxtType = function(el, toRotate, period) {
  this.toRotate = toRotate;
  this.el = el;
  this.loopNum = 0;
  this.period = parseInt(period, 10) || 2000;
  this.txt = '';
  this.tick();
  this.isDeleting = false;
};

TxtType.prototype.tick = function() {
  var i = this.loopNum % this.toRotate.length;
  var fullTxt = this.toRotate[i];
  var typeCursor = document.getElementById('typeCursor');

    if (typeCursor.classList.contains("blinking")) {
        typeCursor.classList.remove("blinking");
    }

  if (this.isDeleting) {
  this.txt = fullTxt.substring(0, this.txt.length - 1);
  } else {
  this.txt = fullTxt.substring(0, this.txt.length + 1);
  }
  
  var splitWord = this.txt.split(" ");
  if (splitWord[1] !== undefined){
    this.el.innerHTML = '<span style="color:var(--accent-2)">'+splitWord[0]+'</span> <span style="color:var(--accent-3)">'+splitWord[1]+'</span>';
  }
  else{
    this.el.innerHTML = '<span style="color:var(--accent-2)">'+splitWord[0]+'</span>';
  }


  var that = this;
  var delta = 200 - Math.random() * 100;

  if (this.isDeleting) { delta /= 2; }

  if (!this.isDeleting && this.txt === fullTxt) {
  delta = this.period;
  this.isDeleting = true;
  typeCursor.classList.add("blinking");
  } 
  else if (this.isDeleting && this.txt === '') {
  this.isDeleting = false;
  this.loopNum++;
  delta = 500;
  typeCursor.classList.add("blinking");
  }

  setTimeout(function() {
  that.tick();
  }, delta);
};

window.onload = function() {
  var elements = document.getElementsByClassName('typewrite');
  for (var i=0; i<elements.length; i++) {
      var toRotate = elements[i].getAttribute('data-type');
      var period = elements[i].getAttribute('data-period');
      if (toRotate) {
        new TxtType(elements[i], JSON.parse(toRotate), period);
      }
  }
};

/*rotate circle*/
var elem = document.getElementsByClassName('circle');

window.addEventListener('scroll', function() {
	var value = window.scrollY * 0.25;
  for (var i=0; i<elem.length;i++){
    elem[i].style.transform = `translatex(-50%) translatey(-50%) rotate(${value}deg)`; 
  }
});


function handlePillBackgroundChange() {
    var elements = document.querySelectorAll('.filter-pills .nav-link');
    var pillBackground = document.querySelector('.pill-background');
    var left = 0;
    var width = this.getBoundingClientRect().width;
    var height = this.getBoundingClientRect().height;
    var self = this;
    // var activePill = this;
    AOS.refresh();
    
    while (self.parentNode.previousElementSibling) {
        left += self.parentNode.previousElementSibling.firstElementChild.getBoundingClientRect().width;
        self = self.parentNode.previousElementSibling.firstElementChild;
    }

    pillBackground.style.left = left + 'px';
    pillBackground.style.width = this.getBoundingClientRect().width + 'px';
    pillBackground.style.height = this.getBoundingClientRect().height + 4 + 'px';
    if ( this.hasAttribute('data-color') ) {
        pillBackground.style.backgroundColor = this.getAttribute('data-color') + ' !important';
    } else {
        pillBackground.style.backgroundColor = '';
    }
    elements.forEach(function(el) {
        el.classList.remove('has-background');
    });
    this.classList.add('has-background');

    if ( this.hasAttribute('data-filter') ) {
        var filter = this.getAttribute('data-filter');
        document.querySelectorAll('#work-results [data-filter]').forEach(function(col) {
            if ( col.getAttribute('data-filter') === filter ) {
                col.classList.remove('hide');
            } else {
                col.classList.add('hide');
            }
        });
    } else {
        document.querySelectorAll('#work-results [data-filter]').forEach(function(col) {
            col.classList.remove('hide');
        });
    }
}

(function() {
    // Filter in Our Work section
    var elements = document.querySelectorAll('.filter-pills .nav-link');
    var pillBackground = document.querySelector('.pill-background');
    pillBackground.style.left = 0;
    pillBackground.style.width = elements[0].getBoundingClientRect().width + 'px';
    pillBackground.style.height = elements[0].getBoundingClientRect().height + 4 + 'px';
    elements.forEach(function(element) {
        element.addEventListener('click', handlePillBackgroundChange);
    });

    // Handle window resize for the pill bg
    window.addEventListener('resize', function() {
        var activePill = document.querySelector('.filter-pills .nav-link.has-background');
        handlePillBackgroundChange.call(activePill);
    });

    // Expand/Collapse the Our Work section
    document.querySelector('#see-our-work-expand button').addEventListener('click', function() {
        var ourWorkSection = document.querySelector('#our-work');
        var textElement = this.querySelector('.btn-arrow-slide-text');
        if ( ourWorkSection.classList.contains('expanded') ) {
            ourWorkSection.classList.remove('expanded');
            textElement.innerHTML = 'See More';
            ourWorkSection.scrollIntoView({ behavior: 'smooth' });
        } else {
            ourWorkSection.classList.add('expanded');
            textElement.innerHTML = 'See Less';
        }
    });
})()

/**
 * AOS v2 Initialization
 * @url https://github.com/michalsnik/aos/tree/v2#init-aos
 */
AOS.init({
  duration: 1000,
  disable: Boolean(window.innerWidth < 1024),
  delay: 200,
  once: true
});
</script>
@endsection