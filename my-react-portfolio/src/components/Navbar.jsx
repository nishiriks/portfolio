import React, { useEffect, useState } from 'react';

export default function Navbar() {
  const [activeSection, setActiveSection] = useState('home');

  useEffect(() => {
    const handleScroll = () => {
      const sections = document.querySelectorAll('header[id], section[id]');
      let current = '';

      sections.forEach((section) => {
        const sectionTop = section.offsetTop - 150;
        const sectionHeight = section.offsetHeight;
        if (window.scrollY >= sectionTop && window.scrollY < sectionTop + sectionHeight) {
          current = section.getAttribute('id');
        }
      });

      if ((window.innerHeight + window.scrollY) >= document.body.offsetHeight - 50) {
        current = 'contact';
      }

      if (current) setActiveSection(current);
    };

    window.addEventListener('scroll', handleScroll);
    return () => window.removeEventListener('scroll', handleScroll);
  }, []);

  return (
    <nav className="navbar fixed-top floating-nav justify-content-center pt-3">
      <div className="nav-pill-wrapper d-flex align-items-center flex-nowrap px-4 py-2">
        <a className={`navitem ${activeSection === 'home' ? 'active' : ''}`} href="#home">HOME</a>
        <a className={`navitem ${activeSection === 'about-me' ? 'active' : ''}`} href="#about-me">ABOUT ME</a>
        <a className={`navitem ${activeSection === 'my-skills' ? 'active' : ''}`} href="#my-skills">SKILLS</a>
        <a className={`navitem ${activeSection === 'projects' ? 'active' : ''}`} href="#projects">PROJECTS</a>
        <a className={`navitem ${activeSection === 'contact' ? 'active' : ''}`} href="#contact">CONTACT</a>
      </div>
    </nav>
  );
}