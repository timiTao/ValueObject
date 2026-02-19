# Contributing

Thank you for considering contributing to this project.

## Development environment

All tooling runs **inside Docker**. You need Docker installed; no local PHP is required.

Every command is run via the project **Makefile**. From the repository root:

- **Install dependencies:** `make composer-install`
- **Run tests:** `make php-phpspec`
- **Code standards (analyse):** `make code-analysis` — runs PHPCS (PSR-1, PSR-2) and PHPStan
- **Code standards (auto-fix):** `make code-fix` — runs PHPCBF (PSR-1, PSR-2)

Before submitting a pull request, please run `make code-analysis` and `make php-phpspec` and ensure they pass.

## Proposing changes

1. Fork the repository and create a branch (e.g. `feature/short-description` or `fix/issue-description`).
2. Make your changes and ensure tests and code standards pass (see above).
3. Open a pull request against the upstream repository with a clear description of the change and the behaviour you expect.

We appreciate your contributions.
