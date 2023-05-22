module.exports = function(grunt) {

    "use strict";

    grunt.initConfig({
        pkg: grunt.file.readJSON("package.json"),
        banner: "/*!\n" +
                " * Countdown v<%= pkg.version %>\n" +
                " * <%= pkg.homepage %>\n" +
                " *\n" +
                " * Copyright <%= grunt.template.today('yyyy') %> <%= pkg.author.name %>\n" +
                " * Released under the <%= pkg.license.type %> license\n" +
                " */\n",
        clean: {
            dist: ["dist/"],
            build: ["build/<%= pkg.version %>.<%= grunt.template.today('yyyymmdd') %>"],
            release: ["release/<%= pkg.version %>"],
            docs: ["../fengyuanchen.github.io/<%= pkg.name %>/"]
        },
        jshint: {
            options: {
                jshintrc: ".jshintrc"
            },
            files: ["Gruntfile.js", "src/*.js"]
        },
        uglify: {
            // options: {
            //     sourceMap: true,
            //     sourceMapName: "dist/<%= pkg.name %>.map"
            // },
            files: {
                src: "src/<%= pkg.name %>.js",
                dest: "dist/<%= pkg.name %>.min.js"
            }
        },
        usebanner: {
            options: {
                position: "top",
                banner: "<%= banner %>"
            },
            files: ["dist/*.js"]
        },
        copy: {
            dist: {
                expand: true,
                cwd: "src/",
                src: "**",
                dest: "dist/",
                filter: "isFile"
            },
            build: {
                expand: true,
                cwd: "dist/",
                src: "**",
                dest: "build/<%= pkg.version %>.<%= grunt.template.today('yyyymmdd') %>/",
                filter: "isFile"
            },
            release: {
                expand: true,
                cwd: "dist/",
                src: "**",
                dest: "release/<%= pkg.version %>/",
                filter: "isFile"
            },
            sync: {
                expand: true,
                cwd: "dist/",
                src: "**",
                dest: "../fengyuanchen.github.io/dist/",
                filter: "isFile"
            },
            docs: {
                expand: true,
                cwd: "docs/",
                src: "**",
                dest: "../fengyuanchen.github.io/<%= pkg.name %>/",
                filter: "isFile"
            }
        },
        watch: {
            files: [
                "src/<%= pkg.name %>.js"
            ],
            tasks: "default"
        }
    });

    // Loading dependencies
    require("load-grunt-tasks")(grunt);

    grunt.registerTask("release", ["clean:release", "copy:release"]);
    grunt.registerTask("docs", ["clean:docs", "copy:sync", "copy:docs"]);
    grunt.registerTask("default", ["clean:dist", "clean:build", "jshint", "uglify", "copy:dist", "usebanner", "copy:build"]);
};
