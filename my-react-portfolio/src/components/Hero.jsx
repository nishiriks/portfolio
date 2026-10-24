
import React from "react";

export default function Hero() {
  return (
    <header id="home" className="hero-section">
      <div className="container hero-container">
        <div className="row align-items-center">

          {/* Left: Graduation portrait */}
          <div className="col-lg-5 col-12 text-center mb-4 mb-lg-0">
            <div className="hero-image-box">
              <img
                src="/resource/img/bg.png"
                alt="Krizia Jane Lleva"
                className="hero-profile-img img-fluid"
                style={{
                  maxHeight: "500px",
                  objectFit: "contain",
                }}
              />
            </div>
          </div>

          {/* Right: Introduction */}
          <div className="col-lg-7 col-12 text-center text-lg-start">
            <div className="code-intro mb-3">
              <span className="code-slash">//</span>{" "}
              <span className="code-text">
                const greeting = "Hello, I'm";
              </span>
            </div>

            <h1 className="mb-4">
              <span className="name title-word title-word-1">
                KRIZIA
              </span>
            </h1>

            <p className="hero-tagline mb-3">
              Front-End Web Developer &amp; UI Designer passionate
              about crafting modern, responsive web apps.
            </p>

            {/* Technology stack */}
            <div className="tech-pills justify-content-center justify-content-lg-start mb-4">
              <span className="badge-pill">React.js</span>
              <span className="badge-pill">JavaScript</span>
              <span className="badge-pill">Bootstrap</span>
              <span className="badge-pill">HTML/CSS</span>
            </div>

            {/* Social links */}
            <div className="socials d-flex justify-content-center justify-content-lg-start align-items-center">
              <a
                href="https://www.linkedin.com/in/krizia-lleva"
                target="_blank"
                rel="noopener noreferrer"
                aria-label="LinkedIn"
              >
                <i className="fa-brands fa-linkedin-in" />
              </a>

              <a
                href="https://github.com/nishiriks"
                target="_blank"
                rel="noopener noreferrer"
                aria-label="GitHub"
              >
                <i className="fa-brands fa-github" />
              </a>

              <a
                href="https://www.facebook.com/keyjeyal"
                target="_blank"
                rel="noopener noreferrer"
                aria-label="Facebook"
              >
                <i className="fa-brands fa-facebook-f" />
              </a>

              <a
                href="https://www.instagram.com/keyjey_al"
                target="_blank"
                rel="noopener noreferrer"
                aria-label="Instagram"
              >
                <i className="fa-brands fa-instagram" />
              </a>
            </div>

            {/* CV button */}
            <div className="mt-3">
              <a
                href="https://drive.google.com/drive/folders/1DCM9NAypyxP8uFaAgNE1ayuHQtPj-D75?usp=drive_link"
                download="Krizia_Jane_Lleva_CV.pdf"
                className="btn btn-full cv-btn"
              >
                DOWNLOAD CV
              </a>
            </div>

          </div>
        </div>
      </div>
    </header>
  );
}
