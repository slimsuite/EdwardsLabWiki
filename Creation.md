# Creating the EdwardsLabWiki github
This page gives an overview of the creation process for the `EdwardsLabWiki` using [GitHub][1] and associated git tools and commands.

## Step 1: Create GitHub repository
See instructions on GitHub if unsure. I created a [README.md][2] file to have a git repo for cloning in this case. The alternative is to create an empty repo and push into it. I'll be trying this below with the wiki!

## Step 2: Clone repository
```
git clone https://github.com/slimsuite/EdwardsLabWiki.git
```
As I am intending to push the same repo into the wiki, I copied the [README.md][2] file as the wiki's initial [HOME.md][3] page:
```
cp README.md Home.md
```
I then made the initial version of this [Creation.md][4] file. Within this, I am trying some "local" markdown file links, e.g. `[Home.md](./Home.md)`. I am not sure whether this works!

## Step 3: Create the wiki repository
I use the **GitHub Desktop App** for generating my commits and **GitUp** for visualising the branching structure - **WARNING:** I intend to make use of branching for this repo!

---
<small>Last Edit: 20 Jul 2018</small>


[1]: https://github.com/
[2]: https://github.com/slimsuite/EdwardsLabWiki/README.md
[3]: ./Home.md
[4]: https://github.com/slimsuite/EdwardsLabWiki/Creation.md