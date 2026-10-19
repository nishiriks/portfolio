
import React from "react";

const skillCategories = [
  {
    title: "Frontend Development",
    icon: "fa-solid fa-code",
    skills: [
      { name: "HTML5", icon: "devicon-html5-plain colored" },
      { name: "CSS3", icon: "devicon-css3-plain colored" },
      { name: "JavaScript", icon: "devicon-javascript-plain colored" },
      { name: "Bootstrap", icon: "devicon-bootstrap-plain colored" },
      { name: "Tailwind CSS", icon: "devicon-tailwindcss-original colored" },
      { name: "React.js", icon: "devicon-react-original colored" },
    ],
  },
  {
    title: "Backend, APIs & Security",
    icon: "fa-solid fa-server",
    skills: [
      { name: "Node.js", icon: "devicon-nodejs-plain colored" },
      { name: "Gemini API", icon: "fa-solid fa-robot accent-icon" },
      { name: "Zapier", icon: "fa-solid fa-bolt accent-icon" },
    ],
  },
  {
    title: "Design, Tools & Hardware",
    icon: "fa-solid fa-screwdriver-wrench",
    skills: [
      { name: "Figma", icon: "devicon-figma-plain colored" },
      { name: "Canva", icon: "devicon-canva-original colored" },
      { name: "CapCut", icon: "fa-solid fa-video accent-icon" },
      { name: "Git", icon: "devicon-git-plain colored" },
      { name: "GitHub", icon: "devicon-github-original white-icon" },
    ],
  },
];

export default function Skills() {
  return (
    <section className="skills section-padding" id="my-skills">
      <div className="container">
        {/* Section heading */}
        <div className="section-header text-center">
          <h2 className="section-title">Tech Stack &amp; Tools</h2>
          <div className="title-line mx-auto" />
        </div>

        {/* Skill categories */}
        <div className="skills-categories">
          {skillCategories.map((category) => (
            <div className="skills-category" key={category.title}>
              <h3 className="category-subtitle">
                <i className={category.icon} aria-hidden="true" />
                <span>{category.title}</span>
              </h3>

              <div className="skills-grid">
                {category.skills.map((skill) => (
                  <div className="skill-card" key={skill.name}>
                    <i
                      className={`skill-icon ${skill.icon}`}
                      aria-hidden="true"
                    />

                    <span className="skill-name">{skill.name}</span>
                  </div>
                ))}
              </div>
            </div>
          ))}
        </div>
      </div>
    </section>
  );
}
