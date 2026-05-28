# PHP SQL Injection Test Project

This project is designed to test Snyk's custom SAST rules for handling custom sanitizer functions.

## Purpose

The code contains an intentional SQL injection vulnerability that uses a custom sanitizer function (`custom_sanitize_input`). This allows you to:

1. Verify Snyk detects the SQL injection vulnerability
2. Create a custom SAST rule to mark `custom_sanitize_input` as a trusted sanitizer
3. Confirm the custom rule suppresses the finding on rescan

## Project Structure

- `index.php` - Main entry point with SQL injection vulnerability
- `sanitizer.php` - Custom sanitizer function (`custom_sanitize_input`)
- `db.php` - Database connection helper

## How to Test

1. **Run Snyk Code Scan**
   ```bash
   snyk code test
   ```
   Snyk should detect a SQL injection vulnerability in `index.php`.

2. **Create Custom SAST Rule**
   In the Snyk UI, create a custom rule that marks `custom_sanitize_input` as a trusted sanitizer for SQL injection.

3. **Rescan**
   Run the scan again. The SQL injection finding should now be suppressed.

## Warning

This code is intentionally vulnerable and should never be used in production. It exists solely for testing security scanning tools.
