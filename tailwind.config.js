import withMT from "@material-tailwind/html/utils/withMT";

/** @type {import('tailwindcss').Config} */
export default withMT({
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./path/to/your/html/**/*.html"
    ],
    theme: {
        extend: {},
    },
    plugins: [],
});
