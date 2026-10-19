
import React from "react";

const projectList = [
  {
    title: "MOLECULES",
    badge: "Capstone",
    description:
      "An AI-assisted laboratory resource management system featuring inventory tracking, automated scheduling, and reporting powered by the Gemini API.",
    tags: ["HTML", "CSS", "JavaScript", "Bootstrap 5", "Gemini API"],
    image: "public/resource/img/molecules.png",
    link: "https://github.com/nishiriks",
    demo: "",
  },
  {
    title: "Arkanoid Arcade Remake",
    badge: "Game Logic",
    description:
      "A 5-round classic brick-breaker arcade game recreation featuring custom mouse controls, collision physics, and mobile-responsive level designs.",
    tags: ["GDevelop", "Game Design", "UI Logic"],
    image: "public/resource/img/arkanoid.png",
    link: "YOUR_ARKANOID_GITHUB_REPOSITORY_URL",
    demo: "https://gd.games/keyjeyal/arkanoid-game-replica---end-te",
  },
  {
    title: "Inventory System",
    badge: "1st Year Final Project",
    description:
      "A foundational inventory management system developed as a 1st-year final project to track stock, organize record items, and streamline basic asset workflows.",
    tags: ["HTML5", "CSS3", "JavaScript", "Bootstrap"],
    image: "public/resource/img/inventory.png",
    link: "https://github.com/nishiriks",
    demo: "",
  },
];

export default function Projects() {
  return (
    <section className="projects section-padding" id="projects">
      <div className="container">
        {/* Section heading */}
        <div className="section-header text-center">
          <h2 className="section-title">Featured Projects</h2>
          <div className="title-line mx-auto" />
        </div>

        {/* Project grid */}
        <div className="projects-grid">
          {projectList.map((project) => (
            <article className="project-card" key={project.title}>
              {/* Project image and hover overlay */}
              <div className="project-img-wrapper">
                <img
                  src={project.image}
                  alt={`${project.title} project preview`}
                  className="project-img"
                  loading="lazy"
                />


                <div className="project-overlay">
                  {/* GitHub icon */}
                  <a
                    href={project.link}
                    className="project-link-btn"
                    target="_blank"
                    rel="noopener noreferrer"
                    aria-label={`View ${project.title} source code`}
                    title="View source code"
                  >
                    <i className="fa-brands fa-github"></i>
                  </a>

                  {/* Game console icon */}
                  {project.demo && (
                    <a
                      href={project.demo}
                      className="project-link-btn"
                      target="_blank"
                      rel="noopener noreferrer"
                      aria-label={`Play ${project.title}`}
                      title="Play game"
                    >
                      <i className="fa-solid fa-gamepad"></i>
                    </a>
                  )}
                </div>

              </div>

              {/* Project information */}
              <div className="project-info">
                <span className="project-badge">
                  {project.badge}
                </span>

                <h3 className="project-title">{project.title}</h3>

                <p className="project-description">
                  {project.description}
                </p>

                <div className="project-tags">
                  {project.tags.map((tag) => (
                    <span className="project-tag" key={tag}>
                      {tag}
                    </span>
                  ))}
                </div>
              </div>
            </article>
          ))}
        </div>
      </div>
    </section>
  );
}
