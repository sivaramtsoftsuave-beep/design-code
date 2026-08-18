<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Cloud-based Data & Backup Operations Platform — Case Study | Soft Suave</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@400;500;600;700&family=Inter:wght@400;500;600&family=IBM+Plex+Mono:wght@400;500;600&display=swap" rel="stylesheet">

<!--
  ============================================================================
  PAGE MAP — each numbered block below is a self-contained, reusable section.
  Sections are wrapped in <section class="cs-section" id="..."> and can be
  reordered, duplicated, or removed independently. CSS for each section is
  grouped under a matching "COMPONENT:" comment in <style>, using the
  cs-<component>__<part> naming so nothing leaks across sections.

    01. Top bar            (#top)
    02. Hero                (#hero)
    03. Client Overview / About Client   (#overview)
    04. Challenges → Requirements diff   (#challenges)
    05. Solution Offered    (#solution)
    06. Key Features        (#features)
    07. Results & Impact    (#results)
    08. Download case study (#download)
    09. Related Case Studies(#related)
    10. Book a Consultation (#consult)
    11. Footer              (#footer)
  ============================================================================
-->

<style>
  :root{
    --bg:#F5F7FA;
    --panel:#FFFFFF;
    --ink:#10151B;
    --ink-soft:#54606E;
    --ink-faint:#8894A0;
    --line:#DCE2E8;
    --restore:#FF6C3A;
    --restore-bg:#EAF4F0;
    --flag:#B5472A;
    --flag-bg:#F7ECE7;
    --radius:16px;
    --maxw:1280px;
  }
  *{box-sizing:border-box;}
  html{scroll-behavior:smooth;}
  body{
    margin:0;background:var(--bg);color:var(--ink);
    font-family:'Inter',sans-serif;font-size:16px;line-height:1.6;
    -webkit-font-smoothing:antialiased;
  }
  .head-highlight{color:var(--restore);}
  h1,h2,h3{font-family:'Space Grotesk',sans-serif;margin:0;letter-spacing:-0.01em;}
  .mono{font-family:'IBM Plex Mono',monospace;}
  a{color:inherit;text-decoration:none;}
  img{max-width:100%;display:block;}
  .cs-wrap{max-width:var(--maxw);margin:0 auto;padding:0 clamp(20px,4vw,56px);}
  .cs-section{padding:64px 0;border-bottom:1px solid var(--line);}
  .cs-section__head{display:flex;justify-content:space-between;align-items:baseline;margin-bottom:32px;flex-wrap:wrap;gap:10px;}
  .cs-section__head h2{font-size:26px;font-weight:600;}
  .cs-section__tag{font-size:11px;letter-spacing:0.1em;text-transform:uppercase;color:var(--ink-faint);}
  .cs-eyebrow{font-size:12px;letter-spacing:0.14em;text-transform:uppercase;color:var(--restore);font-weight:600;margin-bottom:18px;display:block;}
  .cs-btn{font-family:'IBM Plex Mono',monospace;font-size:13px;padding:13px 22px;border-radius:2px;display:inline-block;letter-spacing:0.02em;border:1px solid transparent;cursor:pointer;}
  .cs-btn--primary{background:var(--restore);color:#fff;}
  .cs-btn--ghost{border:1px solid var(--line);color:var(--ink);}
  .cs-btn--ghost-dark{border:1px solid #3A4550;color:#fff;}
  .reveal{opacity:0;transform:translateY(14px);transition:opacity .6s ease,transform .6s ease;}
  .reveal.in{opacity:1;transform:translateY(0);}
  @media (prefers-reduced-motion: reduce){ .reveal{opacity:1;transform:none;transition:none;} }

  .cs-hero,.cs-section{scroll-margin-top:104px;}

  /* ==========================================================================
     COMPONENT: two-column layout — side nav rail + stacked content (#toc)
     .cs-layout wraps every section from Overview through Consult in a
     2-division grid: (1) .cs-toc-rail — sticky vertical dot-nav, (2)
     .cs-toc-content — the sections, stacked one below another, unchanged.
     Below 880px the rail collapses into a horizontal scrollable pill bar
     pinned above the content instead of a left column. -------------------- */
  .cs-layout{padding:56px 0 64px;}
  .cs-layout__inner{display:grid;grid-template-columns:200px 1fr;gap:56px;align-items:start;}
  .cs-toc-content{min-width:0;}
  .cs-toc-content .cs-wrap{max-width:none;padding:0;margin:0;} /* neutralize nested cs-wrap */

  .cs-toc-rail{position:sticky;top:96px;align-self:start;}
  .cs-toc-rail__list{list-style:none;margin:0;padding:0;position:relative;}
  .cs-toc-rail__list::before{
    content:'';position:absolute;left:4px;top:6px;bottom:6px;width:1px;background:var(--line);z-index:0;
  }
  .cs-toc-rail__list li{margin-bottom:30px;}
  .cs-toc-rail__list li:last-child{margin-bottom:0;}
  .cs-toc-rail__list a{
    position:relative;z-index:1;display:flex;align-items:center;gap:14px;
    font-family:'IBM Plex Mono',monospace;font-size:14px;font-weight:500;
    color:var(--ink-faint);transition:color .2s ease;
  }
  .cs-toc-rail__list a:hover{color:var(--ink);}
  .cs-toc-rail__list a .dot{
    flex:0 0 auto;width:9px;height:9px;border-radius:50%;
    background:var(--panel);border:2px solid var(--line);
    transition:background .2s ease,border-color .2s ease,box-shadow .2s ease;
  }
  .cs-toc-rail__list a.active{color:var(--restore);font-weight:600;}
  .cs-toc-rail__list a.active .dot{
    background:var(--restore);border-color:var(--restore);box-shadow:0 0 0 4px var(--restore-bg);
  }

  @media (max-width:880px){
    .cs-layout__inner{grid-template-columns:1fr;gap:0;}
    .cs-toc-rail{
      position:sticky;top:53px;z-index:9;align-self:auto;
      background:var(--bg);border-bottom:1px solid var(--line);
      overflow-x:auto;-webkit-overflow-scrolling:touch;scrollbar-width:none;
      padding:12px 0;margin-bottom:8px;
    }
    .cs-toc-rail::-webkit-scrollbar{display:none;}
    .cs-toc-rail__list{display:flex;gap:8px;white-space:nowrap;}
    .cs-toc-rail__list::before{display:none;}
    .cs-toc-rail__list li{margin-bottom:0;flex:0 0 auto;}
    .cs-toc-rail__list a{
      padding:7px 13px;border-radius:999px;border:1px solid var(--line);font-size:12.5px;
    }
    .cs-toc-rail__list a.active{background:var(--restore-bg);border-color:var(--restore);}
    .cs-toc-rail__list a .dot{width:7px;height:7px;}
  }

  /* COMPONENT: top bar (#top) ------------------------------------------- */
  .cs-topbar{border-bottom:1px solid var(--line);background:var(--panel);position:sticky;top:0;z-index:10;}
  .cs-topbar__inner{display:flex;align-items:center;justify-content:space-between;padding:14px 0;}
  .cs-topbar__logo img{height:26px;width:auto;}
  .cs-topbar__tag{font-size:11px;letter-spacing:0.12em;text-transform:uppercase;color:var(--ink-faint);display:flex;align-items:center;gap:8px;}
  .cs-topbar__tag .dot{width:6px;height:6px;border-radius:50%;background:var(--restore);display:inline-block;}
  @media (max-width:640px){ .cs-topbar__tag span.txt{display:none;} }

  /* ==========================================================================
     COMPONENT: HERO — cover image (#hero)
     Reusable, self-contained hero. To reuse on another case-study page:
       1. Swap the <img> inside .cs-hero__bg for that project's cover shot.
       2. Edit eyebrow / h1 / p / .cs-hero__category text.
       3. Add or remove .plat-icon items inside .cs-hero__platform-icons —
          one icon+label per supported platform (Web / iOS / Android / etc).
       4. Swap the <img> inside .cs-mock__frame for that project's screenshot —
          the frame, shadow, and floating status chips stay the same.
     ========================================================================== */
  .cs-hero{
    position:relative;overflow:hidden;color:#F3F6F8;
    padding:100px 0 100px;border-bottom:1px solid var(--line);
    isolation:isolate;
  }
  .cs-hero__bg{position:absolute;inset:0;z-index:-2;background:#0B1016;}
  .cs-hero__bg img{
    width:100%;height:100%;object-fit:cover;object-position:center;
    transform:scale(1.06);filter:blur(3px) brightness(.72) saturate(1.1);
    opacity:1;
  }
  .cs-hero__overlay{
    position:absolute;inset:0;z-index:-1;
    background:
      radial-gradient(760px 480px at 82% 18%, rgba(31,138,112,.18), transparent 60%),
      linear-gradient(115deg, rgba(8,12,16,.82) 0%, rgba(9,13,18,.66) 38%, rgba(10,15,20,.38) 68%, rgba(10,15,20,.2) 100%);
  }
  .cs-hero__grid-lines{
    position:absolute;inset:0;z-index:-1;opacity:.35;pointer-events:none;
    background-image:
      linear-gradient(rgba(255,255,255,.05) 1px, transparent 1px),
      linear-gradient(90deg, rgba(255,255,255,.05) 1px, transparent 1px);
    background-size:44px 44px;
    mask-image:linear-gradient(180deg, rgba(0,0,0,.9), transparent 85%);
  }
  .cs-hero__glow{position:absolute;z-index:-1;border-radius:50%;filter:blur(60px);pointer-events:none;}
  .cs-hero__glow--a{width:360px;height:360px;background:rgba(31,138,112,.35);top:-120px;right:8%;}
  .cs-hero__glow--b{width:280px;height:280px;background:rgba(181,71,42,.20);bottom:-100px;left:2%;}

  .cs-hero__inner{
    display:grid;grid-template-columns:1.05fr 0.95fr;gap:56px;align-items:center;
  }
  .cs-hero__eyebrow{
    font-family:'IBM Plex Mono',monospace;font-size:12px;letter-spacing:0.14em;text-transform:uppercase;
    color:#7FE0BE;font-weight:600;margin-bottom:20px;display:inline-flex;align-items:center;gap:8px;
  }
  .cs-hero__eyebrow::before{content:'';width:16px;height:1px;background:#7FE0BE;display:inline-block;}
  .cs-hero h1{font-size:clamp(30px,4.4vw,46px);font-weight:600;line-height:1.12;margin-bottom:18px;color:#fff;}
  .cs-hero p{color:#C3CDD5;font-size:16.5px;max-width:520px;margin-bottom:26px;}

  .cs-hero__tags{margin-bottom:26px;}
  .cs-hero__category{
    font-family:'IBM Plex Mono',monospace;font-size:11.5px;letter-spacing:.03em;
    color:#EAF4F0;background:rgba(255,255,255,.08);border:1px solid rgba(255,255,255,.16);
    padding:7px 14px;border-radius:999px;display:inline-block;backdrop-filter:blur(6px);
  }
  .cs-hero__platforms-label{
    display:block;font-size:10px;letter-spacing:.12em;text-transform:uppercase;color:#8A96A0;margin-bottom:10px;
  }
  .cs-hero__platform-icons{display:flex;flex-wrap:wrap;gap:10px;}
  .plat-icon{
    display:flex;align-items:center;gap:8px;
    background:rgba(255,255,255,.06);border:1px solid rgba(255,255,255,.14);
    padding:8px 14px 8px 10px;border-radius:10px;backdrop-filter:blur(6px);
    font-size:13px;font-weight:500;color:#EDF1F3;
  }
  .plat-icon svg{width:16px;height:16px;stroke:#7FE0BE;flex:0 0 auto;}

  /* ---- reusable hero visual: framed image ------------------------------
     Reusable: swap the <img> inside .cs-mock__frame for any project shot —
     screenshot, product photo, illustration. The floating status chips and
     frame styling stay the same regardless of what image is dropped in. */
  .cs-mock{position:relative;width:100%;max-width:440px;margin-inline:auto;}
  .cs-mock__float{
    position:absolute;z-index:3;display:flex;align-items:center;gap:8px;
    background:rgba(16,21,27,.85);color:#F3F6F8;border:1px solid rgba(255,255,255,.12);
    border-radius:10px;padding:9px 13px;font-family:'IBM Plex Mono',monospace;font-size:11px;
    box-shadow:0 16px 30px -10px rgba(0,0,0,.5);backdrop-filter:blur(8px);white-space:nowrap;
  }
  .cs-mock__float--top{top:-14px;left:-14px;}
  .cs-mock__float--bottom{bottom:-14px;right:-10px;}
  .pulse{width:7px;height:7px;border-radius:50%;background:var(--restore);position:relative;flex:0 0 auto;}
  .pulse::after{
    content:'';position:absolute;inset:-4px;border-radius:50%;border:1px solid var(--restore);
    animation:cs-pulse 1.8s ease-out infinite;
  }
  @keyframes cs-pulse{0%{transform:scale(.6);opacity:.9;}100%{transform:scale(2);opacity:0;}}

  .cs-mock__frame{
    background:var(--panel);border-radius:14px;overflow:hidden;
    box-shadow:0 40px 70px -24px rgba(3,6,10,.6), 0 0 0 1px rgba(255,255,255,.06);
    transform:rotate(1deg);
  }
  .cs-mock__frame img{width:100%;height:auto;display:block;}

  @media (max-width:900px){
    .cs-hero__inner{grid-template-columns:1fr;text-align:left;}
    .cs-mock{max-width:380px;margin-inline:0;margin-top:8px;}
    .cs-mock__float{display:none;}
  }
  @media (max-width:640px){
    .cs-hero{padding:130px 0 40px;}
    .cs-hero p{max-width:none;}
  }

  /* COMPONENT: single-column issue/requirement list
     Used by the (now separate) Challenges and Client Requirements sections.
     Reusable: --minus (red, for problems) / --plus (green, for solved-for
     requirements). Duplicate an <li> to add another line item. ----------- */
  .cs-issue-list{border:1px solid var(--line);background:var(--panel);border-radius:var(--radius);overflow:hidden;}
  .cs-issue-list__head{
    font-family:'IBM Plex Mono',monospace;font-size:12px;font-weight:600;letter-spacing:.06em;
    padding:12px 20px;border-bottom:1px solid var(--line);background:#FF6C3A;color:#fff;
  }
  .cs-issue-list__head--minus{color:var(--flag);background:var(--flag-bg);}
  .cs-issue-list__head--plus{color:var(--restore);background:var(--restore-bg);}
  .cs-issue-list ul{list-style:none;margin:0;padding:0;}
  .cs-issue-list li{display:flex;gap:12px;padding:13px 20px;border-bottom:1px solid var(--line);}
  .cs-issue-list li:last-child{border-bottom:none;}
  .cs-issue-list .sym{flex:0 0 14px;font-family:'IBM Plex Mono',monospace;font-weight:600;font-size:14px;}
  .cs-issue-list--minus .sym{color:var(--flag);}
  .cs-issue-list--plus .sym{color:var(--restore);}
  .cs-issue-list .txt{font-size:14.5px;color:var(--ink);}

  /* COMPONENT: solution narrative + supporting image (#solution) -----------
     Reusable across case studies with any image dimensions: the frame is a
     fixed-max-height box that centers the image and never crops it
     (object-fit: contain), so a wide dashboard screenshot and a tall phone
     screenshot both sit correctly framed without stretching the section. */
  .cs-solution{max-width:max-content;}
  .cs-solution p{color:var(--ink-soft);font-size:16px;}
  .cs-solution__figure{
    margin:28px 0 0;border:1px solid var(--line);border-radius:var(--radius);
    background:var(--bg);box-shadow:0 24px 44px -26px rgba(16,21,27,.28);
    display:flex;align-items:center;justify-content:center;
    padding:clamp(14px,2vw,28px);
  }
  .cs-solution__figure img{
    display:block;width:auto;height:auto;
    max-width:100%;max-height:560px;
    object-fit:contain;border-radius:var(--radius);
  }
  @media (max-width:640px){
    .cs-solution__figure img{max-height:380px;}
  }

  /* COMPONENT: feature grid (#features) ------------------------------------ */
  .cs-features{display:grid;grid-template-columns:repeat(3,1fr);gap:1px;background:var(--line);border:1px solid var(--line);}
  .cs-features__card{background:var(--panel);padding:28px 24px;}
  .cs-features__tag{font-family:'IBM Plex Mono',monospace;font-size:11px;letter-spacing:0.06em;color:var(--restore);background:var(--restore-bg);padding:3px 8px;display:inline-block;margin-bottom:16px;border-radius:2px;}
  .cs-features__card h3{font-size:17px;font-weight:600;margin-bottom:8px;}
  .cs-features__card p{font-size:14px;color:var(--ink-soft);margin:0;}
  @media (max-width:760px){ .cs-features{grid-template-columns:1fr;} }
  @media (min-width:761px) and (max-width:980px){ .cs-features{grid-template-columns:repeat(2,1fr);} }

  /* COMPONENT: results metrics (#results) ---------------------------------- */
  .cs-metric{display:grid;grid-template-columns:170px 1fr 70px;align-items:center;gap:20px;padding:16px 0;border-top:1px solid var(--line);}
  .cs-metric:last-child{border-bottom:1px solid var(--line);}
  .cs-metric .label{font-size:14.5px;font-weight:500;}
  .cs-metric .track{height:6px;background:var(--line);border-radius:3px;overflow:hidden;}
  .cs-metric .fill{height:100%;background:var(--restore);width:0;transition:width 1.1s cubic-bezier(.4,0,.2,1);}
  .cs-metric .num{font-family:'IBM Plex Mono',monospace;font-size:18px;font-weight:600;text-align:right;color:var(--restore);}
  @media (max-width:640px){ .cs-metric{grid-template-columns:110px 1fr 50px;gap:12px;} }

  /* COMPONENT: download banner (#download) --------------------------------- */
  .cs-download{background:var(--panel);border:1px solid var(--line);border-radius:var(--radius);padding:40px;display:grid;grid-template-columns:1.3fr 1fr;gap:40px;align-items:center;}
  .cs-download p{color:var(--ink-soft);font-size:15px;margin:10px 0 0;}
  .cs-download__form{display:grid;gap:10px;}
  .cs-download__form input{font-family:'Inter',sans-serif;font-size:14px;padding:12px 14px;border:1px solid var(--line);border-radius:2px;background:var(--bg);color:var(--ink);}
  .cs-download__form input::placeholder{color:var(--ink-faint);}
  .cs-download__action{display:flex;align-items:center;justify-content:center;}
  .cs-download__action .cs-btn{width:100%;text-align:center;padding-top:16px;padding-bottom:16px;}
  @media (max-width:760px){ .cs-download{grid-template-columns:1fr;} }

  /* COMPONENT: related case studies — auto-playing carousel (#related) -----
     One card in view at a time. Autoplay advances every 2s and loops
     seamlessly (a clone of the first slide sits at the end of the track;
     on reaching it the track snaps back to slide 0 with no visible jump).
     Dots + arrows allow manual control; hovering the viewport pauses
     autoplay. -------------------------------------------------------------- */
  .cs-related-carousel{position:relative;}
  .cs-related-carousel__viewport{
    overflow:hidden;border:1px solid var(--line);border-radius:var(--radius);background:var(--panel);
  }
  .cs-related-carousel__track{display:flex;}
  .cs-related-carousel__slide{
    flex:0 0 100%;width:100%;display:grid;grid-template-columns:320px 1fr;
  }
  .cs-related-carousel__figure{overflow:hidden;background:var(--bg);min-height:260px;}
  .cs-related-carousel__figure img{width:100%;height:100%;object-fit:cover;display:block;}
  .cs-related-carousel__body{padding:36px 40px;display:flex;flex-direction:column;justify-content:center;gap:12px;}
  .cs-related-carousel__body h3{font-size:21px;font-weight:600;}
  .cs-related-carousel__body p{font-size:14.5px;color:var(--ink-soft);margin:0;max-width:480px;}
  .cs-related-carousel__link{
    font-family:'IBM Plex Mono',monospace;font-size:12.5px;color:var(--restore);margin-top:6px;
    display:inline-flex;align-items:center;gap:4px;width:max-content;
    text-shadow:0 0 0 rgba(31,138,112,0);
    transition:color .25s ease,text-shadow .25s ease,gap .25s ease;
  }
  .cs-related-carousel__slide:hover .cs-related-carousel__link{
    color:#14614C;text-shadow:0 0 14px rgba(31,138,112,.55);gap:8px;
  }

  .cs-related-carousel__controls{display:flex;align-items:center;justify-content:center;gap:16px;margin-top:22px;}
  .cs-related-carousel__arrow{
    width:34px;height:34px;border-radius:50%;border:1px solid var(--line);background:var(--panel);
    display:flex;align-items:center;justify-content:center;cursor:pointer;color:var(--ink-soft);
    transition:border-color .2s ease,color .2s ease;flex:0 0 auto;
  }
  .cs-related-carousel__arrow:hover{border-color:var(--restore);color:var(--restore);}
  .cs-related-carousel__arrow svg{width:16px;height:16px;}
  .cs-related-carousel__dots{display:flex;gap:8px;}
  .cs-related-carousel__dot{
    width:8px;height:8px;border-radius:50%;background:var(--line);border:none;padding:0;cursor:pointer;
    transition:background .2s ease,transform .2s ease;
  }
  .cs-related-carousel__dot.active{background:var(--restore);transform:scale(1.35);}

  @media (max-width:760px){
    .cs-related-carousel__slide{grid-template-columns:1fr;}
    .cs-related-carousel__figure{min-height:200px;}
    .cs-related-carousel__body{padding:24px;}
  }

  /* COMPONENT: consultation (#consult) -------------------------------------- */
  .cs-consult{display:grid;grid-template-columns:1fr 1fr;gap:48px;align-items:start;}
  .cs-consult__form{display:grid;gap:12px;}
  .cs-consult__form input,.cs-consult__form textarea{font-family:'Inter',sans-serif;font-size:14px;padding:12px 14px;border:1px solid var(--line);border-radius:2px;background:var(--panel);color:var(--ink);width:100%;}
  .cs-consult__form textarea{min-height:90px;resize:vertical;}
  .cs-consult__card{border:1px solid var(--line);background:var(--panel);border-radius:var(--radius);padding:24px;}
  .cs-consult__person{display:flex;align-items:center;gap:14px;margin-bottom:20px;}
  .cs-consult__person img{width:56px;height:56px;border-radius:50%;object-fit:cover;}
  .cs-consult__person .name{font-weight:600;font-size:15px;}
  .cs-consult__person .role{font-size:12.5px;color:var(--ink-faint);}
  .cs-consult__badges{display:flex;flex-wrap:wrap;gap:16px;align-items:center;margin-top:20px;padding-top:20px;border-top:1px solid var(--line);}
  .cs-consult__badges img{height:28px;width:auto;filter:grayscale(15%);}
  @media (max-width:820px){ .cs-consult{grid-template-columns:1fr;} }

  /* COMPONENT: footer (#footer) ---------------------------------------------- */
  .cs-footer{background:var(--ink);color:#C9D2DA;padding:56px 0 24px;}
  .cs-footer .cs-wrap{display:grid;grid-template-columns:1.4fr repeat(3,1fr);gap:32px;}
  .cs-footer h4{font-size:11px;letter-spacing:0.1em;text-transform:uppercase;color:#7C8894;margin-bottom:16px;font-weight:600;}
  .cs-footer ul{list-style:none;margin:0;padding:0;display:grid;gap:10px;}
  .cs-footer ul a{font-size:13.5px;color:#C9D2DA;}
  .cs-footer ul a:hover{color:#fff;}
  .cs-footer__brand img{height:24px;margin-bottom:14px;}
  .cs-footer__brand p{font-size:13px;color:#8A94A0;max-width:320px;margin:0 0 16px;}
  .cs-footer__social{display:flex;gap:10px;}
  .cs-footer__social img{height:20px;width:20px;}
  .cs-footer__bottom{max-width:var(--maxw);margin:40px auto 0;padding:24px clamp(20px,4vw,56px) 0;border-top:1px solid #262E36;display:flex;flex-wrap:wrap;justify-content:space-between;gap:16px;font-size:12.5px;color:#7C8894;}
  .cs-footer__addr{font-size:13px;color:#8A94A0;line-height:1.7;}
  .cs-footer__addr strong{color:#C9D2DA;display:block;font-size:13.5px;margin-bottom:2px;}
  @media (max-width:900px){ .cs-footer .cs-wrap{grid-template-columns:1fr 1fr;} }
  @media (max-width:600px){ .cs-footer .cs-wrap{grid-template-columns:1fr;} }
</style>
</head>
<body>

<!--Modal started-->
<div class="modal fade" id="consult_Popup" role="dialog">
    <div class="modal-dialog consult_dialog" data-case-study="Cloud-based Data & Backup Operations Platform" data-case-study-url="https://www.softsuave.com/assets/case-studies/REPLACE-WITH-REAL-PDF-URL.pdf">
        <?php include('case-study-download-form.php'); ?>
    </div>
</div>

<!-- ======================= 01. TOP BAR (#top) ======================= -->
<div class="cs-topbar" id="top">
  <div class="cs-wrap cs-topbar__inner">
    <a class="cs-topbar__logo" href="https://www.softsuave.com/">
      <img src="https://www.softsuave.com/new-assets/common/images/softsuave_logo.webp" alt="Soft Suave">
    </a>
    <span class="cs-topbar__tag"><span class="dot"></span><span class="txt">case study · cloud &amp; it infrastructure</span></span>
  </div>
</div>


<!-- ======================= 02. HERO — cover image (#hero) =======================
     REUSABLE PATTERN — three swappable pieces:
       (a) .cs-hero__bg img  → the cover/background photo (auto-darkened + blurred)
       (b) .cs-hero__content → eyebrow, heading, paragraph, category, platform icons
       (c) .cs-mock          → right-side product visual. A framed image with
                                two floating status chips. Swap the <img> src
                                for any project's screenshot to reuse.
     Duplicate this whole <header>, swap the three pieces, and it's a new hero. -->
<header class="cs-hero" id="hero">
  <div class="cs-hero__bg" aria-hidden="true">
    <img src="https://www.softsuave.com/assets/images/CS01.webp" alt="">
  </div>
  <div class="cs-hero__overlay" aria-hidden="true"></div>
  <div class="cs-hero__grid-lines" aria-hidden="true"></div>
  <div class="cs-hero__glow cs-hero__glow--a" aria-hidden="true"></div>
  <div class="cs-hero__glow cs-hero__glow--b" aria-hidden="true"></div>

  <div class="cs-wrap cs-hero__inner">

    <!-- (b) content -->
    <div class="cs-hero__content">
      <span class="cs-hero__eyebrow">Case Study</span>
      <h1>Cloud-based Data &amp; <span class="head-highlight">Backup Operations Platform</span></h1>
      <p>Soft Suave developed a cloud-based data protection platform that simplifies identity data management and backup operations for enterprise tenants — giving IT teams a centralized portal built for compliance, traceability, and reliability.</p>

      <div class="cs-hero__tags">
        <span class="cs-hero__category">Cloud &amp; IT Infrastructure</span>
      </div>

      <div class="cs-hero__platforms">
        <span class="cs-hero__platforms-label">Supported Platform</span>
        <div class="cs-hero__platform-icons">
          <span class="plat-icon" title="Web">
            <svg viewBox="0 0 24 24" fill="none" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="9"/><path d="M3 12h18M12 3c2.5 2.6 3.8 5.7 3.8 9s-1.3 6.4-3.8 9c-2.5-2.6-3.8-5.7-3.8-9S9.5 5.6 12 3z"/></svg>
            Web
          </span>
          <!-- Reusable: copy the .plat-icon block above for iOS / Android / Desktop
               when a future case study supports more than one platform. -->
        </div>
      </div>
    </div>

    <!-- (c) product visual — framed image -->
    <div class="cs-mock" aria-hidden="true">
      <div class="cs-mock__float cs-mock__float--top"><span class="pulse"></span>v2.4.1 · Synced 2m ago</div>

      <div class="cs-mock__frame">
        <img src="https://www.softsuave.com/assets/images/CS01.webp" alt="Cloud-based Data and Backup Operations Platform">
      </div>

      <div class="cs-mock__float cs-mock__float--bottom">✓ Restore complete — Object #4471</div>
    </div>

  </div>
</header>

<!-- ======================= LAYOUT: side nav rail + stacked sections (#toc) =======================
     Two divisions after the hero: (1) .cs-toc-rail — sticky vertical dot
     nav, highlights the section currently in view; (2) .cs-toc-content —
     every section below, stacked one under the other, unchanged. -->
<div class="cs-layout">
  <div class="cs-wrap cs-layout__inner">

    <aside class="cs-toc-rail" id="toc" aria-label="Jump to a section">
      <ol class="cs-toc-rail__list">
        <li><a href="#overview" class="active"><span class="dot"></span>Overview</a></li>
        <li><a href="#about-client"><span class="dot"></span>About Client</a></li>
        <li><a href="#challenges"><span class="dot"></span>Challenges</a></li>
        <li><a href="#requirements"><span class="dot"></span>Requirements</a></li>
        <li><a href="#solution"><span class="dot"></span>Solution</a></li>
        <li><a href="#features"><span class="dot"></span>Features</a></li>
        <li><a href="#results"><span class="dot"></span>Results</a></li>
        <li><a href="#download"><span class="dot"></span>Download</a></li>
        <li><a href="#related"><span class="dot"></span>Related</a></li>
        <li><a href="#consult"><span class="dot"></span>Consult</a></li>
      </ol>
    </aside>

    <div class="cs-toc-content">

<!-- ======================= 03. CLIENT OVERVIEW (#overview) ======================= -->
<section class="cs-section reveal" id="overview">
  <div class="cs-wrap">
    <div class="cs-section__head">
      <h2>Client Overview</h2>
      <span class="cs-section__tag">The engagement</span>
    </div>
    <div class="cs-solution">
      <p>A cloud-based data protection solution was developed to enable secure and seamless access to a centralized identity management portal. The platform supports comprehensive management of tenant data and backup operations for organizational users. This integration ensures users can securely access, monitor, and manage backup, restore, and version history of critical identity-related information. Leveraging an intuitive dashboard and real-time monitoring, the solution empowers IT teams to maintain data integrity and respond swiftly to anomalies.</p>
    </div>
  </div>
</section>

<!-- ======================= 03b. ABOUT THE CLIENT (#about-client) ======================= -->
<section class="cs-section reveal" id="about-client">
  <div class="cs-wrap">
    <div class="cs-section__head">
      <h2>About the Client</h2>
      <span class="cs-section__tag">Company profile</span>
    </div>
    <div class="cs-solution">
      <p>The client is a B2B cloud service provider offering data protection solutions to enterprise users. Their infrastructure enables secure onboarding of tenants, backup automation, and identity data recovery. Acting as the gateway for managing multiple organizations and tenants, the platform supports compliance, traceability, and lifecycle operations. By integrating with identity data systems, the client enhances data management efficiency across user environments.</p>
    </div>
  </div>
</section>

<!-- ======================= 04. CHALLENGES (#challenges) ======================= -->
<section class="cs-section reveal" id="challenges">
  <div class="cs-wrap">
    <div class="cs-section__head">
      <h2>Challenges</h2>
      <span class="cs-section__tag">What had to change</span>
    </div>
    <div class="cs-issue-list cs-issue-list--minus">
      <div class="cs-issue-list__head">− CHALLENGES</div>
      <ul>
        <li><span class="sym">−</span><span class="txt">Fragmented navigation between Dropsuite and the portal</span></li>
        <li><span class="sym">−</span><span class="txt">Lack of real-time backup and authorization monitoring</span></li>
        <li><span class="sym">−</span><span class="txt">Difficulty comparing live data with historical records</span></li>
        <li><span class="sym">−</span><span class="txt">Inefficient snapshot search and attribute tracking</span></li>
        <li><span class="sym">−</span><span class="txt">No selective attribute restore, increasing rollback risk</span></li>
      </ul>
    </div>
  </div>
</section>

<!-- ======================= 04b. CLIENT REQUIREMENTS (#requirements) ======================= -->
<section class="cs-section reveal" id="requirements">
  <div class="cs-wrap">
    <div class="cs-section__head">
      <h2>Client Requirements</h2>
      <span class="cs-section__tag">What the platform needed to deliver</span>
    </div>
    <div class="cs-issue-list cs-issue-list--plus">
      <div class="cs-issue-list__head">+ REQUIREMENTS</div>
      <ul>
        <li><span class="sym">+</span><span class="txt">Tenant-based seamless access</span></li>
        <li><span class="sym">+</span><span class="txt">Backup operation visibility</span></li>
        <li><span class="sym">+</span><span class="txt">Versioned object snapshots</span></li>
        <li><span class="sym">+</span><span class="txt">Attribute-level comparison</span></li>
        <li><span class="sym">+</span><span class="txt">Selective data restore</span></li>
      </ul>
    </div>
  </div>
</section>

<!-- ======================= 05. SOLUTION OFFERED (#solution) ======================= -->
<section class="cs-section reveal" id="solution">
  <div class="cs-wrap">
    <div class="cs-section__head">
      <h2>Solution Offered</h2>
      <span class="cs-section__tag">How it was solved</span>
    </div>
    <div class="cs-solution">
      <p>The solution enables users to securely manage identity data across multiple tenants through a unified portal. From a centralized dashboard, users can initiate backups, restore data, and track activity status. All changes to identity objects are versioned in a robust database, allowing for complete traceability. A side-by-side comparison of live and backup data ensures discrepancies are easily identified. Restoration can be performed selectively or entirely, with detailed confirmation and audit support.</p>
      <figure class="cs-solution__figure">
        <img src="https://www.softsuave.com/assets/images/CS01.webp" alt="Cloud-based Data and Backup Operations Platform interface">
      </figure>
    </div>
  </div>
</section>

<!-- ======================= 06. KEY FEATURES (#features) ======================= -->
<section class="cs-section reveal" id="features">
  <div class="cs-wrap">
    <div class="cs-section__head">
      <h2>Key Features</h2>
      <span class="cs-section__tag">Platform modules</span>
    </div>
    <div class="cs-features">
      <div class="cs-features__card">
        <span class="cs-features__tag">DASHBOARD</span>
        <h3>Tenant Dashboard</h3>
        <p>Displays backup status, authorization, and quick actions.</p>
      </div>
      <div class="cs-features__card">
        <span class="cs-features__tag">OBJECT-VIEW</span>
        <h3>Object View</h3>
        <p>Lists users, groups, roles with snapshot history.</p>
      </div>
      <div class="cs-features__card">
        <span class="cs-features__tag">COMPARE</span>
        <h3>Data Comparison</h3>
        <p>Highlights mismatched attributes.</p>
      </div>
      <div class="cs-features__card">
        <span class="cs-features__tag">VERSION</span>
        <h3>Version Search</h3>
        <p>Filters snapshots by date or attribute changes.</p>
      </div>
      <div class="cs-features__card">
        <span class="cs-features__tag">RESTORE</span>
        <h3>Restore Dialog</h3>
        <p>Allows selective attribute-level restoration.</p>
      </div>
    </div>
  </div>
</section>

<!-- ======================= 07. RESULTS & IMPACT (#results) ======================= -->
<section class="cs-section reveal" id="results">
  <div class="cs-wrap">
    <div class="cs-section__head">
      <h2>Results &amp; Impact</h2>
      <span class="cs-section__tag">Measured after launch</span>
    </div>
    <div class="cs-metrics">
      <div class="cs-metric"><span class="label">Enhanced Control</span><div class="track"><div class="fill" data-value="70"></div></div><span class="num">70%</span></div>
      <div class="cs-metric"><span class="label">Accelerated Recovery</span><div class="track"><div class="fill" data-value="80"></div></div><span class="num">80%</span></div>
      <div class="cs-metric"><span class="label">Streamlined Navigation</span><div class="track"><div class="fill" data-value="75"></div></div><span class="num">75%</span></div>
      <div class="cs-metric"><span class="label">Reinforced Integrity</span><div class="track"><div class="fill" data-value="65"></div></div><span class="num">65%</span></div>
    </div>
  </div>
</section>

<!-- ======================= 08. DOWNLOAD CASE STUDY (#download) ======================= -->
<section class="cs-section reveal" id="download">
  <div class="cs-wrap">
    <div class="cs-download">
      <div>
        <h2 style="font-size:22px;font-weight:600;">Get the full case study</h2>
        <p>Download this practical case study to learn how our cloud-based data management solution helped the client streamline data storage, improve accessibility, and enhance efficiency.</p>
      </div>
      <div class="cs-download__action">
        <button type="button" class="cs-btn cs-btn--primary" data-toggle="modal" data-target="#consult_Popup">Download Case Study</button>
      </div>
    </div>
  </div>
</section>

<!-- ======================= 09. RELATED CASE STUDIES — carousel (#related) =======================
     One card at a time, auto-advances every 2s and loops forever. Reusable:
     duplicate a .cs-related-carousel__slide inside the track (and its
     matching dot below) to add another case study; the last real slide is
     mirrored as a hidden clone at the very end of the track so the loop
     back to slide 1 is seamless. -->
<section class="cs-section reveal" id="related">
  <div class="cs-wrap">
    <div class="cs-section__head">
      <h2>Related Case Studies</h2>
      <span class="cs-section__tag">Real-world impact through digital transformation</span>
    </div>

    <div class="cs-related-carousel" id="relatedCarousel">
      <div class="cs-related-carousel__viewport">
        <div class="cs-related-carousel__track" id="relatedTrack">

          <a class="cs-related-carousel__slide" href="https://www.softsuave.com/case-study-ai-optimization-in-healthcare">
            <div class="cs-related-carousel__figure"><img src="https://www.softsuave.com/assets/images/healthcare-1.webp" alt="AI Optimization in Healthcare"></div>
            <div class="cs-related-carousel__body">
              <h3>AI Optimization in Healthcare</h3>
              <p>Soft Suave uses AI to boost healthcare accuracy, optimize treatments, and streamline operations.</p>
              <span class="cs-related-carousel__link mono">View Case Study →</span>
            </div>
          </a>

          <a class="cs-related-carousel__slide" href="https://www.softsuave.com/case-study-online-consultation-platform-for-doctors">
            <div class="cs-related-carousel__figure"><img src="https://www.softsuave.com/assets/images/patient-2-new.png" alt="Remote Platform to Connect Doctors and Patients from Anywhere"></div>
            <div class="cs-related-carousel__body">
              <h3>Remote Platform to Connect Doctors and Patients from Anywhere</h3>
              <p>Soft Suave built an app for remote doctor-patient appointments and video consultations.</p>
              <span class="cs-related-carousel__link mono">View Case Study →</span>
            </div>
          </a>

          <a class="cs-related-carousel__slide" href="https://www.softsuave.com/case-study-telehealth-consultation-platform-for-doctors">
            <div class="cs-related-carousel__figure"><img src="https://www.softsuave.com/assets/images/telemedicine-2.png" alt="Time-saving Video Calling App for Healthcare Industry"></div>
            <div class="cs-related-carousel__body">
              <h3>Time-saving Video Calling App for Healthcare Industry</h3>
              <p>Our MedTech client sought to expand healthcare access globally via mobile telemedicine innovation.</p>
              <span class="cs-related-carousel__link mono">View Case Study →</span>
            </div>
          </a>

          <a class="cs-related-carousel__slide" href="https://www.softsuave.com/case-study-online-consultation-platform-for-doctors">
            <div class="cs-related-carousel__figure"><img src="https://www.softsuave.com/assets/images/tele-app.png" alt="Custom Telehealth App for Doctor Consultation"></div>
            <div class="cs-related-carousel__body">
              <h3>Custom Telehealth App for Doctor Consultation</h3>
              <p>Soft Suave's app connects doctors and patients for remote appointments and video calls.</p>
              <span class="cs-related-carousel__link mono">View Case Study →</span>
            </div>
          </a>

          <a class="cs-related-carousel__slide" href="https://www.softsuave.com/case-study-optimizing-a-healthcare-application">
            <div class="cs-related-carousel__figure"><img src="https://www.softsuave.com/assets/images/optimize_health_Care.webp" alt="Optimizing A Healthcare Application for Better Efficiency"></div>
            <div class="cs-related-carousel__body">
              <h3>Optimizing A Healthcare Application for Better Efficiency</h3>
              <p>Our client uses AI to transform healthcare for insurers, hospitals, companies, and patients.</p>
              <span class="cs-related-carousel__link mono">View Case Study →</span>
            </div>
          </a>

          <!-- clone of slide 1 — lets the track keep sliding forward, then snaps
               instantly (no transition) back to the real slide 1 behind it -->
          <a class="cs-related-carousel__slide" aria-hidden="true" tabindex="-1" href="https://www.softsuave.com/case-study-ai-optimization-in-healthcare">
            <div class="cs-related-carousel__figure"><img src="https://www.softsuave.com/assets/images/healthcare-1.webp" alt=""></div>
            <div class="cs-related-carousel__body">
              <h3>AI Optimization in Healthcare</h3>
              <p>Soft Suave uses AI to boost healthcare accuracy, optimize treatments, and streamline operations.</p>
              <span class="cs-related-carousel__link mono">View Case Study →</span>
            </div>
          </a>

        </div>
      </div>

      <div class="cs-related-carousel__controls">
        <button class="cs-related-carousel__arrow" id="relatedPrev" aria-label="Previous case study" type="button">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M15 18l-6-6 6-6"/></svg>
        </button>
        <div class="cs-related-carousel__dots" id="relatedDots"></div>
        <button class="cs-related-carousel__arrow" id="relatedNext" aria-label="Next case study" type="button">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 6l6 6-6 6"/></svg>
        </button>
      </div>
    </div>
  </div>
</section>


<!-- ======================= 10. BOOK A CONSULTATION (#consult) ======================= -->
<section class="cs-section reveal" id="consult">
  <div class="cs-wrap">
    <div class="cs-section__head">
      <h2>Book Free Consultation</h2>
      <span class="cs-section__tag">30 minutes, no cost</span>
    </div>

    <div class="cs-consult">
      <form class="cs-consult__form" onsubmit="return false;">
        <p style="color:var(--ink-soft);font-size:14.5px;margin:0 0 6px;">Get a 30-minute free consultation from a field expert. Validate your idea for free and get a rough quote once you complete this form.</p>
        <input type="text" placeholder="Your Name *" required>
        <input type="email" placeholder="Email Address *" required>
        <input type="text" placeholder="Company *" required>
        <input type="tel" placeholder="Phone Number *" required>
        <textarea placeholder="Brief about the project *" required></textarea>
        <button type="submit" class="cs-btn cs-btn--primary" style="justify-self:start;">Submit</button>
      </form>

      <div class="cs-consult__card">
        <span class="mono" style="font-size:11px;letter-spacing:0.08em;color:var(--ink-faint);text-transform:uppercase;">What's next?</span>
        <p style="font-size:14px;color:var(--ink-soft);margin:8px 0 20px;">One of our Account Managers will contact you shortly.</p>
        <div class="cs-consult__person">
          <img src="https://www.softsuave.com/assets/images/madhu-manager.webp" alt="Madhu Kadiyala">
          <div>
            <div class="name">Madhu Kadiyala</div>
            <div class="role">Technology Consultant</div>
          </div>
        </div>
        <a class="cs-btn cs-btn--ghost" href="https://www.softsuave.com/30-min-free-consultation">Schedule a Call</a>
        <div class="cs-consult__badges">
          <img src="https://www.softsuave.com/new-assets/common/images/upwork-badge-new.webp" alt="Upwork">
          <img src="https://www.softsuave.com/new-assets/common/images/clutch-color.webp" alt="Clutch">
          <img src="https://www.softsuave.com/new-assets/common/images/microsoft-silver.webp" alt="Microsoft Partner">
          <img src="https://www.softsuave.com/new-assets/common/images/aws-color.webp" alt="AWS Partner">
        </div>
      </div>
    </div>
  </div>
</section>

    </div><!-- /.cs-toc-content -->
  </div><!-- /.cs-layout__inner -->
</div><!-- /.cs-layout -->

<!-- ======================= 11. FOOTER (#footer) ======================= -->
<footer class="cs-footer" id="footer">
  <div class="cs-wrap">
    <div class="cs-footer__brand">
      <img src="https://www.softsuave.com/new-assets/common/images/softsuave_logo.webp" alt="Soft Suave" style="filter:brightness(0) invert(1);">
      <p>Soft Suave is an AI-enabled engineering partner helping businesses build scalable AI solutions, automate complex workflows, and integrate modern technologies. With strategic partnerships and augmented teams, we drive modernization and measurable outcomes.</p>
      <div class="cs-footer__social">
        <a href="https://www.instagram.com/softsuavetech/"><img src="https://www.softsuave.com/assets/images/instagram.webp" alt="Instagram"></a>
        <a href="https://www.youtube.com/@softsuave"><img src="https://www.softsuave.com/assets/images/youtube.webp" alt="Youtube"></a>
        <a href="https://in.linkedin.com/company/softsuave"><img src="https://www.softsuave.com/assets/images/linkedin.webp" alt="Linkedin"></a>
      </div>
    </div>

    <div>
      <h4>Services</h4>
      <ul>
        <li><a href="https://www.softsuave.com/global-capability-center">Global Capability Center (GCC)</a></li>
        <li><a href="https://www.softsuave.com/ai-development-service">AI Development Services</a></li>
        <li><a href="https://www.softsuave.com/software-development-company-india">Software Development Services</a></li>
        <li><a href="https://www.softsuave.com/legacy-modernization-services">Legacy Modernization Services</a></li>
      </ul>
    </div>

    <div>
      <h4>Delivery Method</h4>
      <ul>
        <li><a href="https://www.softsuave.com/offshore-software-development-company/">Offshore Software Development</a></li>
        <li><a href="https://www.softsuave.com/it-staff-augmentation-services">IT Staff Augmentation</a></li>
        <li><a href="https://www.softsuave.com/hire-dedicated-developers">Hire Dedicated Developer Team</a></li>
      </ul>
    </div>

    <div>
      <h4>Industries</h4>
      <ul>
        <li><a href="https://www.softsuave.com/ai-in-logistics">Logistics</a></li>
        <li><a href="https://www.softsuave.com/fintech-ai-solutions">FinTech</a></li>
        <li><a href="https://www.softsuave.com/ai-solutions-in-healthtech">HealthTech</a></li>
        <li><a href="https://www.softsuave.com/ai-solutions-in-edutech">EdTech</a></li>
        <li><a href="https://www.softsuave.com/ai-solutions-for-construction">Construction</a></li>
      </ul>
    </div>
  </div>

  <div class="cs-footer__bottom">
    <div class="cs-footer__addr">
      <strong>Main Branch — India</strong>
      Soft Suave Technologies, SSPDL Building, Alpha City, Gamma Block, 5th Floor, Navalur, Chennai – 603103.
    </div>
    <div class="cs-footer__addr">
      <strong>Soft Suave LLC — USA</strong>
      3030 K Street NW, Suite 102, Washington, DC 20007, USA · <a href="mailto:contact@softsuave.com">contact@softsuave.com</a>
    </div>
    <span>Copyright © 2026 by <a href="https://www.softsuave.com/">Soft Suave</a>. All Rights Reserved.</span>
  </div>
</footer>

<script>
  const reveals = document.querySelectorAll('.reveal');
  const io = new IntersectionObserver((entries)=>{
    entries.forEach(e=>{ if(e.isIntersecting){ e.target.classList.add('in'); io.unobserve(e.target); } });
  },{threshold:0.1});
  reveals.forEach(r=>io.observe(r));

  const fills = document.querySelectorAll('.cs-metric .fill');
  const fio = new IntersectionObserver((entries)=>{
    entries.forEach(e=>{
      if(e.isIntersecting){ const el=e.target; el.style.width = el.dataset.value + '%'; fio.unobserve(el); }
    });
  },{threshold:0.3});
  fills.forEach(f=>fio.observe(f));

  // ---- Scrollspy for the #toc nav ----------------------------------------
  // A section becomes active only once its TOP has actually reached the line
  // just below the sticky header — not when it merely enters a mid-screen
  // band. This matches what the eye reads as "now viewing this section".
  const tocLinks = Array.from(document.querySelectorAll('.cs-toc-rail__list a'));
  const tocMap = {};
  tocLinks.forEach(a => { tocMap[a.getAttribute('href').slice(1)] = a; });

  const tocTargets = Object.keys(tocMap)
    .map(id => document.getElementById(id))
    .filter(Boolean);

  let activeId = null;

  const setActive = (id) => {
    if (id === activeId) return;
    const link = tocMap[id];
    if (!link) return;
    activeId = id;
    tocLinks.forEach(l => l.classList.remove('active'));
    link.classList.add('active');
    if (window.innerWidth < 880) {
      link.scrollIntoView({ behavior: 'smooth', inline: 'center', block: 'nearest' });
    }
  };

  const TOC_OFFSET = 130; // px from viewport top that counts as "reached view" — clears the sticky header
  let tocTicking = false;

  function updateActiveSection() {
    let currentId = tocTargets.length ? tocTargets[0].id : null;
    for (const el of tocTargets) {
      if (el.getBoundingClientRect().top - TOC_OFFSET <= 0) {
        currentId = el.id; // sections are in document order — keep advancing while each has reached the line
      } else {
        break;
      }
    }
    if (currentId) setActive(currentId);
    tocTicking = false;
  }

  function onTocScroll() {
    if (!tocTicking) {
      window.requestAnimationFrame(updateActiveSection);
      tocTicking = true;
    }
  }

  window.addEventListener('scroll', onTocScroll, { passive: true });
  window.addEventListener('resize', onTocScroll);
  updateActiveSection();

  // smooth-scroll with the sticky offsets already handled by scroll-margin-top
  tocLinks.forEach(a => {
    a.addEventListener('click', (e) => {
      const id = a.getAttribute('href').slice(1);
      const target = document.getElementById(id);
      if (!target) return;
      e.preventDefault();
      target.scrollIntoView({ behavior: 'smooth', block: 'start' });
      history.replaceState(null, '', '#' + id);
    });
  });

  // ---- Related case studies carousel: autoplay, loop, dots, arrows ------
  (function () {
    const track = document.getElementById('relatedTrack');
    const dotsWrap = document.getElementById('relatedDots');
    const prevBtn = document.getElementById('relatedPrev');
    const nextBtn = document.getElementById('relatedNext');
    const viewport = document.querySelector('.cs-related-carousel__viewport');
    const carousel = document.getElementById('relatedCarousel');
    if (!track || !dotsWrap) return;

    const slides = Array.from(track.children);
    const realCount = slides.length - 1; // last slide is the clone of slide 1
    let index = 0;
    const AUTOPLAY_MS = 2000;
    const TRANSITION_MS = 600;
    let timer = null;

    // build dots (one per real slide)
    for (let i = 0; i < realCount; i++) {
      const dot = document.createElement('button');
      dot.type = 'button';
      dot.className = 'cs-related-carousel__dot' + (i === 0 ? ' active' : '');
      dot.setAttribute('aria-label', 'Go to related case study ' + (i + 1));
      dot.addEventListener('click', () => goTo(i, true));
      dotsWrap.appendChild(dot);
    }
    const dots = Array.from(dotsWrap.children);

    function setDots(realIndex) {
      dots.forEach((d, i) => d.classList.toggle('active', i === realIndex));
    }

    function render(withTransition) {
      track.style.transition = withTransition ? `transform ${TRANSITION_MS}ms cubic-bezier(.4,0,.2,1)` : 'none';
      track.style.transform = `translateX(-${index * 100}%)`;
    }

    function goTo(realIndex, userInitiated) {
      index = realIndex;
      render(true);
      setDots(index);
      if (userInitiated) restartAutoplay();
    }

    function next() {
      index++;
      render(true);
      setDots(index % realCount);
    }

    function prev() {
      if (index === 0) {
        // jump to the end instantly, then slide back one — keeps it seamless going backward too
        index = realCount;
        render(false);
        track.getBoundingClientRect(); // force reflow
        index = realCount - 1;
        render(true);
      } else {
        index--;
        render(true);
      }
      setDots((index + realCount) % realCount);
      restartAutoplay();
    }

    // when the track finishes sliding onto the cloned slide, snap back to the real first slide
    track.addEventListener('transitionend', () => {
      if (index === realCount) {
        index = 0;
        render(false);
      }
    });

    function startAutoplay() {
      timer = setInterval(next, AUTOPLAY_MS);
    }
    function stopAutoplay() {
      if (timer) clearInterval(timer);
      timer = null;
    }
    function restartAutoplay() {
      stopAutoplay();
      startAutoplay();
    }

    nextBtn && nextBtn.addEventListener('click', () => { next(); restartAutoplay(); });
    prevBtn && prevBtn.addEventListener('click', prev);

    if (carousel) {
      carousel.addEventListener('mouseenter', stopAutoplay);
      carousel.addEventListener('mouseleave', startAutoplay);
    }

    render(false);
    startAutoplay();
  })();
</script>

</body>
</html>