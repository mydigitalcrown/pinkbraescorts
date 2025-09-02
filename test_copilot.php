<?php
/**
 * Test file to verify GitHub Copilot "Ask to Agent" functionality
 * 
 * Instructions for testing:
 * 1. Open this file in VS Code using the workspace: code pinkbraescorts.code-workspace
 * 2. Select the function below and use Ctrl+I (Cmd+I on Mac)
 * 3. Ask Copilot: "Explain this function"
 * 4. Try asking: "How can I improve this code?"
 * 5. Test inline suggestions by typing PHP code
 */

/**
 * Simple test function for GitHub Copilot integration
 * @param string $name User's name
 * @param string $email User's email address
 * @return array Validation result
 */
function validateUser($name, $email) {
    $errors = [];
    
    // Validate name
    if (empty($name)) {
        $errors[] = "Name is required";
    } elseif (strlen($name) < 2) {
        $errors[] = "Name must be at least 2 characters";
    }
    
    // Validate email
    if (empty($email)) {
        $errors[] = "Email is required";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email format";
    }
    
    return [
        'valid' => empty($errors),
        'errors' => $errors
    ];
}

// Test the function
$testResult = validateUser("John Doe", "john@example.com");
echo "Test result: " . ($testResult['valid'] ? "Valid" : "Invalid") . "\n";

if (!$testResult['valid']) {
    foreach ($testResult['errors'] as $error) {
        echo "Error: " . $error . "\n";
    }
}

/**
 * TODO: Try asking GitHub Copilot to:
 * 1. "Generate a function to sanitize HTML input"
 * 2. "Create a PHP class for database connection"
 * 3. "Write a function to validate Indian phone numbers"
 * 4. "Explain the security issues in this code"
 */

?>