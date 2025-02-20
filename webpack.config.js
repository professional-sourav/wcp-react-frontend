const path = require("path");

module.exports = {
    entry: {
        admin: "./admin/src/my-test-react-plugin-admin.js",
        public: "./public/src/my-test-react-plugin-public.js",
    },
    output: {
        path: path.resolve(__dirname, "public/dist"), // Custom output directory
        filename: (pathData) => {
            return pathData.chunk.name === "admin" ? "admin/my-test-react-plugin-admin.js" : "my-test-react-plugin-public.js";
        },
        clean: true, // Cleans old files in the output directory before each build
    },
    module: {
        rules: [
            {
                test: /\.(js|jsx)$/,
                exclude: /node_modules/,
                use: { loader: "babel-loader" },
            },
            {
                test: /\.css$/,
                use: ["style-loader", "css-loader"],
            },
        ],
    },
    resolve: {
        extensions: [".js", ".jsx"],
    },
};

