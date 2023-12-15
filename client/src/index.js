import React from 'react';
import ReactDOM from 'react-dom/client';

import './theme/theme_tailwind.css';
import './theme/theme_btn.css';
import './theme/theme_state.css';
import './index.css';

import './theme/class_btn.css';

import App from './App';
import reportWebVitals from './reportWebVitals';

const root = ReactDOM.createRoot(document.getElementById('root'));
root.render(
  <React.StrictMode>
    <App />
  </React.StrictMode>
);


reportWebVitals();
