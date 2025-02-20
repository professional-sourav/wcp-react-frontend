import React from "react";
import { createRoot } from "react-dom/client";
import App from "./App";

// Select the root element
const rootElement = document.getElementById("my-test-react-plugin-root");


// Ensure the element exists before rendering
if (rootElement) {
    createRoot(rootElement).render(<App />);
}
