
import React from 'react';


export default function Footer() {
  const currentYear = new Date().getFullYear();

  return (
    <footer className="site-footer">
      <div className="footer-container">
        <p className="copyright-text">
          &copy; <span className="copyright-year">{currentYear}</span>{' '}
          <strong>Krizia Lleva.</strong> All rights reserved.
        </p>
      </div>
    </footer>
  );
}
