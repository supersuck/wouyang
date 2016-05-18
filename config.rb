require 'compass/import-once/activate'
# Require any additional compass plugins here.

# Set this to the root of your project when deployed:
http_path = "/"
css_dir = "web/materialize/css"
sass_dir = "web/materialize/sass"
images_dir = "web/materialize/css"
javascripts_dir = "web/materialize/js"
fonts_dir = "web/materialize/fonts"
sourcemap = true
# Pour windows uniquement, dé-commenter cette ligne.
# cache_path = "C:"


# You can select your preferred output style here (can be overridden via the command line):
# output_style = :expanded or :nested or :compact or :compressed

# To enable relative paths to assets via compass helper functions. Uncomment:
# relative_assets = true

# To disable debugging comments that display the original location of your selectors. Uncomment:
# line_comments = false


# If you prefer the indented syntax, you might want to regenerate this
# project again passing --syntax sass, or you can uncomment this:
# preferred_syntax = :sass
# and then run:
# sass-convert -R --from scss --to sass scss scss && rm -rf sass && mv scss sass

# DEV
output_style = :expanded
line_comments = true

# PROD
# output_style = :compressed
# line_comments = false