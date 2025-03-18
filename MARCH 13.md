# Today

I switched themes for admin to Gin. I don't feel like creating a new custom theme so I'm going quick-and-dirty and adding override twig files directly to themes/contrib/gin.

I have added an override to html.html.twig that will only show on the AGWA Dashboard page. All I've done so far is test it with an `<h1>Hello World</h1>` and it works.

Next steps should be to display user info and then the view blocks, right there in the html twig. Screw convention.
