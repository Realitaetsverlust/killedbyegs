# Killed By EGS

The main repo for the site "killedbyegs.com", a site documenting the failures of the epic game store.

## Why?

I think that the EGS is trying to restrict user freedom and choice by strongarming customers into using their platform by artificially limiting the supply of games. This is done mostly through monetary incentives for the devs that have zero benefit for the end customers.

The epic game store doesn't offer anything for end users. Steam and GoG have features that only they can offer that have huge benefits to players. UPlay, Origin, Battle.net etc. are just as useless as the EGS, but at least those are all first party titles - the epic game store extends his ugly tentacles to snatch up third party titles, sometimes even titles people have been genuinely excited about or titles which are on kickstarter.

Because of my disdain for the store and it's practices, I've decided to document the most obvious failures of the EGS for the future as a sort of memorial to show devs that taking the epic money infusion in exchange for exclusivity is not worth the risk if you genuinely believe in your game.

## Contribute
I appreciate contributes in any way. You can use the included `Dockerfile` to create a container for the project and use `run_docker.sh` to start it - however, that is not necessary, it's a bog standard laravel project.

The data for the games is located under `/resources/js/lostforever.json`. There is no database in the background. 

As this was just a project I coded on a friday afternoon, there are no tests or anything - a project of this size doesn't really need them anyways imo. If something breaks, it's very obvious.
