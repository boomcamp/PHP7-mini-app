#! /usr/bin/env bash
vendor/bin/ecs check classes --fix
vendor/bin/ecs check interface --fix
vendor/bin/ecs check abstract --fix
vendor/bin/ecs check models --fix
