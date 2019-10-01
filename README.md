# composer-commit
Tool to automate committing composer changes to Git.


## Rules

1. `composer.lock` file must be in git.
1. Not allowed to run `composer update` or `composer require` if changes to your git working copy..
1. After `composer update` or `composer require` or `composer remove`:  
  @TODO: Should we just check a diff after composer command? or is this there a definitive list of commands that change these files? 
  1. Create a new branch (optionally)
  1. Commit changes to `composer.*` files with automated message, saving the command that was run, and the output of the command.
  1. Push the new branch (optionally).

NEXT UP: provision-ops/update-dependencies handles detection of updates and runs after composer-commit to create PRs with new deps.

