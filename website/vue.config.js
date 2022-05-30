const { defineConfig } = require('@vue/cli-service')
module.exports = defineConfig({
    transpileDependencies: true,
    devServer: {
        proxy: {
            "^/api/": {
                target: "http://localhost/T/todo-app/",
                pathRewrite: { "^/api/": "/api/" },
                changeOrigin: true,
                logLevel: "debug"
            }
        }
    }
})