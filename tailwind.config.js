/** @type {import('tailwindcss').Config} */
module.exports = {
    content: ["./resources/**/*.blade.php", "./resources/**/*.ts"],
    theme: {
        extend: {},
        container: {
            center: true,
            padding: {
                "2xl": "5rem",
            },
        },
    },
    plugins: [],
};
