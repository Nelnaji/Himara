const defaultTheme = require("tailwindcss/defaultTheme");

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ["Nunito", ...defaultTheme.fontFamily.sans],
            },
            colors: {
                transparent: "transparent",
                currentGold: "#EDCB9A",
                hoverGold: "#D8BA8E",
                white: "#ffffff",
                purple: "#3f3cbb",
                midnight: "#121063",
                metal: "#565584",
                tahiti: "#3ab7bf",
                silver: "#ecebff",
                bubbleGum: "#ff77e9",
                bermuda: "#78dcca",
            },
        },
    },

    plugins: [require("@tailwindcss/forms")],
};
