# Git Markdown Notes

## Page links
When using *relative* path links to link between pages in markdown on the git repo, you need to decide whether you want it to work in the main git repo, or the wiki.

The following [Home](./Home.md) link works in the main repo:

    [Home](./Home.md)
    
Whereas the  following [Home](./Home) link works in the wiki:

    [Home](./Home)
    
Of course, you can always use the full paths to the pages to always force the user to the right spot: remember to add the extra URL parts for the main repo, e.g.:

    https://github.com/slimsuite/EdwardsLabWiki/blob/master/Home.md
   
 And leave off the `*.md` suffix for the wiki:
    
    https://github.com/slimsuite/EdwardsLabWiki/wiki/README