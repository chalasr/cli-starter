
# cli-tool
[![SensioLabsInsight](https://insight.sensiolabs.com/projects/eb32f3db-bf17-4339-b258-43e5df5f9096/mini.png)](https://insight.sensiolabs.com/projects/eb32f3db-bf17-4339-b258-43e5df5f9096)

CLI-Centered base application that uses [Symfony/Console](https://github.com/symfony/console) and [Doctrine](http://www.doctrine-project.org/) as standalone components.

## Requirements

- Symfony/Console (dev)
- Symfony/Yaml (dev)
- Doctrine/ORM (dev)

## Installation

```bash
$ composer create-projet chalasr/cli-tool
```

## Usage

```bash
$ app/console command [options] [arguments]
```

> For an exhaustive list of available commands use `list`

Newly created commands are automatically registered in the application.

Deal with doctrine entities by using  the `EntityManager`.

Use cli in the same way as a symfony2 full-stack project .

## License

[![License](http://img.shields.io/:license-gpl3-blue.svg)](http://www.gnu.org/licenses/gpl-3.0.html)
