
import React, { useState } from 'react';

export default function Contact() {
  const [formData, setFormData] = useState({
    name: '',
    email: '',
    subject: '',
    message: '',
  });

  const handleChange = (e) => {
    setFormData({
      ...formData,
      [e.target.name]: e.target.value,
    });
  };

  const handleSubmit = (e) => {
    e.preventDefault();

    const { name, email, subject, message } = formData;

    const mailto = `mailto:krizia20lleva@gmail.com?subject=${encodeURIComponent(
      subject
    )}&body=${encodeURIComponent(
      `Name: ${name}\nEmail: ${email}\n\n${message}`
    )}`;

    window.location.href = mailto;
  };

  return (
    <section className="contact section-padding" id="contact">
      <div className="container">
        {/* Section Heading */}
        <div className="section-header text-center">
          <h2 className="section-title">Get In Touch</h2>
          <div className="title-line"></div>
        </div>

        {/* Two-column Layout */}
        <div className="contact-grid">

          {/* LEFT: Message Form */}
          <div className="contact-card contact-form-card">
            <h3 className="contact-subtitle">
              Send Me a Message
            </h3>

            <p className="contact-description">
              Whether you have a project idea, a job opportunity,
              or just want to connect, feel free to drop a message below!
            </p>

            <form onSubmit={handleSubmit}>
              <div className="form-row">
                <input
                  type="text"
                  name="name"
                  placeholder="Your Name"
                  className="custom-input"
                  value={formData.name}
                  onChange={handleChange}
                  autoComplete="name"
                  required
                />

                <input
                  type="email"
                  name="email"
                  placeholder="Your Email"
                  className="custom-input"
                  value={formData.email}
                  onChange={handleChange}
                  autoComplete="email"
                  required
                />
              </div>

              <input
                type="text"
                name="subject"
                placeholder="Subject"
                className="custom-input"
                value={formData.subject}
                onChange={handleChange}
                required
              />

              <textarea
                name="message"
                placeholder="Your Message..."
                className="custom-input message-input"
                value={formData.message}
                onChange={handleChange}
                rows="5"
                required
              />

              <button type="submit" className="btn-send-message">
                SEND MESSAGE
                <i className="fa-solid fa-paper-plane"></i>
              </button>
            </form>
          </div>

          {/* RIGHT: Contact Information */}
          <div className="contact-card contact-info-card">
            <h3 className="contact-subtitle">
              Contact Information
            </h3>

            <div className="availability-badge">
              <span className="status-dot"></span>
              <span className="status-text">
                Available for Freelance &amp; Full-Time Roles
              </span>
            </div>

            {/* Email */}
            <a
              href="mailto:krizia20lleva@gmail.com"
              className="info-item"
            >
              <div className="info-icon">
                <i className="fa-solid fa-envelope"></i>
              </div>

              <div>
                <strong>Email</strong>
                <p>krizia20lleva@gmail.com</p>
              </div>
            </a>

            {/* Location */}
            <div className="info-item">
              <div className="info-icon">
                <i className="fa-solid fa-location-dot"></i>
              </div>

              <div>
                <strong>Location</strong>
                <p>Pandi, Bulacan, Philippines</p>
              </div>
            </div>

            {/* Social Links */}
            <h4 className="socials-heading">
              CONNECT WITH ME
            </h4>

            <div className="social-links-grid">
              <a
                href="https://www.linkedin.com/"
                target="_blank"
                rel="noopener noreferrer"
                className="social-link-card"
              >
                <i className="fa-brands fa-linkedin-in"></i>
                LinkedIn
              </a>

              <a
                href="https://github.com/"
                target="_blank"
                rel="noopener noreferrer"
                className="social-link-card"
              >
                <i className="fa-brands fa-github"></i>
                GitHub
              </a>

              <a
                href="https://www.facebook.com/"
                target="_blank"
                rel="noopener noreferrer"
                className="social-link-card"
              >
                <i className="fa-brands fa-facebook-f"></i>
                Facebook
              </a>

              <a
                href="https://www.instagram.com/"
                target="_blank"
                rel="noopener noreferrer"
                className="social-link-card"
              >
                <i className="fa-brands fa-instagram"></i>
                Instagram
              </a>
            </div>
          </div>

        </div>
      </div>
    </section>
  );
}
