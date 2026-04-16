<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="styles.css">


  <title>Grow & Glow — Contact</title>
  
<style>
  
    :root{
      --bg: #0f1724;        
      --accent: #ff6b6b;    
      --muted: #6ee7b7;     
      --card: #fbfbfd;   
      --text: #0b1220;      
      --glass: rgba(255,255,255,0.06);
      --radius: 14px;
      --transition: 300ms cubic-bezier(.2,.9,.3,1);
      --container: 1100px;
    }

    .nav a{
    position: relative;
    font-size: 1.1em;
    color: black;
    text-decoration: none;
    margin-left: 40px;
}

.nav a::after{
    content: '';
    position: absolute;
    left: 0;
    bottom: -6px;
    width: 100%;
    height: 3px;
    background: black;
    border-radius: 5px;
    transform: scaleX(0);
    transition: .5s;
}

.nav a:hover::after{
    transform: scaleX(1);
}

    *{box-sizing:border-box}
    html,body{height:100%}
    body{
      margin:0;
      font-family: "Inter", system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial;
      color:var(--text);
      background: linear-gradient(180deg, #f7f9fc 0%, #ffffff 100%);
      -webkit-font-smoothing:antialiased;
      -moz-osx-font-smoothing:grayscale;
      line-height:1.45;
    }

    .wrap{max-width:var(--container);margin:0 auto;padding:32px;}

    header{
      position:sticky; top:0; z-index:40;
      backdrop-filter: blur(6px);
      background: linear-gradient(180deg, rgba(255,255,255,0.6), rgba(255,255,255,0.4));
      border-bottom:1px solid rgba(11,18,32,0.04);
    }
    .nav{max-width:var(--container);margin:0 auto;display:flex;align-items:center;justify-content:space-between;padding:14px 24px}
    .brand{display:flex;gap:12px;align-items:center}
    .logo{
      width:46px;height:46px;border-radius:10px;
      background:linear-gradient(135deg,var(--accent),#ffb4a2);
      display:flex;align-items:center;justify-content:center;color:white;font-weight:700;font-size:18px;
      box-shadow: 0 6px 18px rgba(15,23,36,0.12);
    }
    .brand h1{font-size:16px;margin:0}
    nav ul{display:flex;gap:18px;list-style:none;margin:0;padding:0;align-items:center}
    nav a{color:var(--text);text-decoration:none;font-weight:600;opacity:.9}
    .cta-btn{
      padding:10px 16px;border-radius:10px;border:0;cursor:pointer;font-weight:700;
      background: linear-gradient(90deg,var(--accent),#ff9aa2);
      color:white;box-shadow: 0 10px 30px rgba(255,107,107,0.14);
      transition: transform var(--transition), box-shadow var(--transition);
    }
    .cta-btn:hover{transform:translateY(-3px);box-shadow:0 18px 40px rgba(255,107,107,0.18)}

    
    .hero{
      margin-top:28px;
      display:flex;gap:36px;align-items:center;padding:48px;
      border-radius:20px;
      background:
        radial-gradient(800px 200px at 10% 20%, rgba(110,231,183,0.06), transparent 10%),
        radial-gradient(600px 180px at 90% 80%, rgba(255,107,107,0.05), transparent 10%),
        linear-gradient(180deg, var(--bg), #16202b);
      color: #e6f7f0;
      overflow:hidden;
      box-shadow: 0 10px 40px rgba(3,7,18,0.12);
    }
    .hero-left{flex:1;min-width:260px;padding:12px 8px}
    .eyebrow{
      display:inline-block;background:rgba(255,255,255,0.08);padding:6px 10px;border-radius:999px;font-weight:700;font-size:13px;
      color: #dff6ea;margin-bottom:18px;
    }
    .hero h2{font-size:34px;line-height:1.04;margin:0 0 16px;font-weight:800}
    .hero p{margin:0 0 22px;opacity:0.95;color: #e8f8ee}
    .hero-actions{display:flex;gap:12px;align-items:center}
    .btn-secondary{
      padding:10px 14px;border-radius:10px;border:1px solid rgba(255,255,255,0.14);
      background:transparent;color:#e8f8ee;font-weight:700;cursor:pointer;
    }

    
    .hero-right{width:480px;max-width:44%;min-width:220px;display:flex;align-items:center;justify-content:center;position:relative}
    .device{
      width:360px;height:260px;border-radius:18px;background:linear-gradient(180deg,#0e1b2a,#123244);
      box-shadow: 0 40px 80px rgba(2,6,12,0.5), inset 0 1px 0 rgba(255,255,255,0.02);
      padding:20px;display:flex;flex-direction:column;gap:12px;color:#dff6ea;
    }
    .device .window{background:rgba(255,255,255,0.03);border-radius:10px;padding:12px;flex:1}
    .sparkle{
      position:absolute;right:-40px;top:-40px;width:220px;height:220px;border-radius:50%;
      background: radial-gradient(circle at 30% 30%, rgba(255,255,255,0.06), transparent 15%),
                  radial-gradient(circle at 70% 70%, rgba(110,231,183,0.06), transparent 12%);
      filter: blur(22px);opacity:0.9;
    }

    
    .features{margin-top:28px;display:grid;grid-template-columns:repeat(3,1fr);gap:20px}
    .card{background:var(--card);border-radius:14px;padding:18px;box-shadow: 0 10px 30px rgba(11,18,32,0.06);border:1px solid rgba(11,18,32,0.04)}
    .card h3{margin:0 0 8px;font-size:18px}
    .card p{margin:0;color: #475569;font-weight:500}
    .icon{
      width:48px;height:48px;border-radius:12px;display:inline-flex;align-items:center;justify-content:center;margin-bottom:12px;
      background:linear-gradient(135deg,var(--muted),#4dd7b0);color:var(--text);font-weight:700;
    }

  
    .testimonials{margin-top:36px;display:flex;gap:20px;align-items:stretch}
    .test-left{flex:1}
    .test-right{flex:1.1;display:flex;flex-direction:column;gap:12px}
    .quote{
      background:linear-gradient(180deg, rgba(255,255,255,0.98), rgba(255,255,255,0.98));
      border-radius:14px;padding:18px;border:1px solid rgba(11,18,32,0.04);box-shadow:0 10px 30px rgba(11,18,32,0.04)
    }
    .stars{color:var(--accent);font-weight:700;margin-bottom:8px}

    
    footer{margin-top:42px;padding:28px 0;color:#334155}
    .footer-grid{display:flex;justify-content:space-between;gap:20px;align-items:center}
    .small{font-size:13px;opacity:.85}

    
    @media (max-width:1000px){
      .hero{flex-direction:column;padding:28px}
      .hero-right{max-width:100%}
      .features{grid-template-columns:repeat(2,1fr)}
      .testimonials{flex-direction:column}
      nav ul{display:none}
    }
    @media (max-width:620px){
      .wrap{padding:16px}
      .hero h2{font-size:26px}
      .features{grid-template-columns:1fr}
      .device{width:100%;height:200px}
      .logo{width:40px;height:40px;font-size:16px}
    }

    
    .muted{color:#6b7280}
    .pill{display:inline-block;padding:6px 10px;border-radius:999px;background:var(--glass);font-weight:700;color:#dff6ea;font-size:13px}

  </style>
  </head>
<body>

    <header>
       <div class="nav">
            <div class="brand">
                <div class="logo" aria-hidden="true">G+</div>
                <div>
                    <h1 style="margin:0">Grow & Glow</h1>
                    <div class="small muted">Self-love • Growth • Learning</div>
                </div>
            </div>
                <nav class="nav">
                    <a href="home2.php">Home</a>
                    <a href="register.php">Register</a>
                    <a href="Admin/login.php">Login</a>
                    <a href="gallery.php">Gallery</a>
                </nav>
          <div style="display:flex;gap:12px;align-items:center">
              <button class="btn-secondary" aria-label="Explore">Explore</button>
               <button class="cta-btn" aria-label="Get started">Get started</button>
            </div>
       </div>
  </header>
    <main>

        <div class="container">
            <!-- ABOUT / CONTACT -->
            <section id="about" style="margin-top:60px;display:flex;justify-content:center;">
                <div style="width:100%;max-width:700px">
                    <div class="card" style="padding:30px;border-radius:12px:">
                     <h4 style="margin-bottom:20px;text-align:center;">Get in touch</h4>
                     
                     <form method="POST" action="process_email.php">
                     <div style="display:flex;flex-direction:column;gap:15px;">
                     <input name="name" required placeholder="Your name" style="padding:14px;border-radius:8px;border:1px solid rgba(11,18,32,0.06);outline:none">
                     <input name="email" required type="email" placeholder="Email" style="padding:10px;border-radius:8px;border:1px solid rgba(11,18,32,0.06);outline:none">
                     <textarea name="msg" placeholder="Message" rows="3" style="padding:10px;border-radius:8px;border:1px solid rgba(11,18,32,0.06);outline:none"></textarea>
                     <button class="cta-btn" type="submit">Send message</button>
                     </div>
                     </form>
                     
                 </div>
              </div>
         </section>
     </div>
    
  
        <footer>
            <div class="wrap" style="padding:18px 0">
                <div class="footer-grid">
                <div>
                 <strong>Grow & Glow</strong>
                 <div class="small muted">Helping you grow through self-love</div>
             </div>
                <div class="small muted">© <span id="year"></span> Grow & Glow — All rights reserved</div>
               </div>
         </div>
     </footer>
 </main>
    <script type="text/javascript"></script>
    <script type="text/javascript"></script>
 

</body>
</html>
