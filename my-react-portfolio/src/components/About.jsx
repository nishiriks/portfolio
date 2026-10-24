
import React from "react";

export default function About() {
  const skills = [
    "React.js",
    "JavaScript (ES6+)",
    "Bootstrap 5",
    "HTML5 / CSS3",
    "Fortinet Cybersecurity",
    "REST APIs",
  ];

  const education = [
    {
      date: "2022 – 2026",
      degree: "BS Information Technology",
      school: "Centro Escolar University, Malolos",
      honors: "Magna Cum Laude",
    },
    {
      date: "2020 – 2022",
      degree: "Senior High School (ICT Strand)",
      school: "ACLC College of Sta. Maria",
    },
    {
      date: "2016 – 2020",
      degree: "Junior High School",
      school: "Virginia Ramirez-Cruz National High School",
    },
  ];

  const certifications = [
    {
      icon: "fa-solid fa-trophy",
      title: "Capstone Project Award",
      description: "MOLECULES: AI-Assisted Laboratory System",
    },
    {
      icon: "fa-solid fa-shield-halved",
      title: "Fortinet Certified Fundamentals",
      description: "Cybersecurity Certification",
    },
    {
      icon: "fa-solid fa-award",
      title: "TESDA NC II Passer",
      description: "Computer Systems Servicing",
    },
  ];

  return (
    <section className="about section-padding" id="about-me">
      <div className="container">
        {/* Section heading */}
        <div className="section-header">
          <h2 className="section-title">About Me</h2>
          <div className="title-line" />
        </div>

        {/* Main two-column layout */}
        <div className="about-grid">
          {/* LEFT CARD */}
          <div className="about-column">
            <div className="about-card">
              <div>
                <h3 className="about-subtitle">Who I Am</h3>

                <p className="about-description">
                  I am a Front-End Web Developer and IT graduate
                  passionate about crafting responsive, user-focused
                  web interfaces. I specialize in building web
                  applications with modern frontend frameworks and
                  clean UI workflows.
                </p>

                <h4 className="tech-stack-title">
                  Core Competencies
                </h4>

                <div className="about-tech-tags">
                  {skills.map((skill) => (
                    <span className="skill-tag" key={skill}>
                      {skill}
                    </span>
                  ))}
                </div>
              </div>

              <div className="about-highlights">
                <div className="highlight-item">
                  <i className="fa-solid fa-code" />
                  <div>
                    <strong>Specialization</strong>
                    <p>Frontend Development &amp; UI Design</p>
                  </div>
                </div>

                <div className="highlight-item">
                  <i className="fa-solid fa-graduation-cap" />
                  <div>
                    <strong>Honors</strong>
                    <p>Magna Cum Laude (Batch 2026)</p>
                  </div>
                </div>
              </div>
            </div>
          </div>

          {/* RIGHT CARD */}
          <div className="about-column">
            <div className="about-card">
              {/* Education timeline */}
              <div className="education-section">
                <h3 className="about-subtitle">
                  Educational Background
                </h3>

                <div className="timeline">
                  {education.map((item) => (
                    <div className="timeline-item" key={item.date}>
                      <span className="timeline-dot" />

                      <span className="timeline-date">
                        {item.date}
                      </span>

                      <div className="timeline-content">
                        <h5>{item.degree}</h5>
                        <p className="school-name">
                          {item.school}
                        </p>

                        {item.honors && (
                          <span className="badge-honors">
                            {item.honors}
                          </span>
                        )}
                      </div>
                    </div>
                  ))}
                </div>
              </div>

              <div className="divider" />

              {/* Certifications and awards */}
              <div className="certifications-section">
                <h3 className="about-subtitle">
                  Certifications &amp; Awards
                </h3>

                <div className="cert-list">
                  {certifications.map((cert) => (
                    <div className="cert-item" key={cert.title}>
                      <i className={`${cert.icon} cert-icon`} />

                      <div>
                        <strong>{cert.title}</strong>
                        <p>{cert.description}</p>
                      </div>
                    </div>
                  ))}
                </div>

                <a
                  href="https://drive.google.com/drive/folders/1X05Ryneo3IDLOuRJ6is57LoDXE1CQkG3?usp=share_link"
                  className="btn-cert"
                  target="_blank"
                  rel="noopener noreferrer"
                >
                  <i className="fa-solid fa-certificate" />
                  View Certificates
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  );
}
