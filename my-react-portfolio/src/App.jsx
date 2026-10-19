
import React from 'react';
import Navbar from './components/Navbar';
import Hero from './components/Hero';
import About from './components/About';
import Skills from './components/Skills';
import Projects from './components/Projects';
import Contact from './components/Contact';
import Footer from './components/Footer';

function App() {
  return (
    <div className="portfolio-app">
      <Navbar />
      <Hero />
      <About />
      <Skills />
      <Projects />
      <Contact />
      <Footer />

      {/* Back to top button */}
      <div className="rtbutton">
        <a href="#home" aria-label="Back to top">
          <i className="fa-solid fa-chevron-up"></i>
        </a>
      </div>
    </div>
  );
}

export default App;
