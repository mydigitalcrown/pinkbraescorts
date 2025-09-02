# GitHub Copilot Setup for Visual Studio Code

This document explains how to set up and use GitHub Copilot's "Ask to Agent" feature in Visual Studio Code with this PHP project.

## Prerequisites

1. **GitHub Copilot Subscription**: Ensure you have an active GitHub Copilot subscription
2. **Visual Studio Code**: Latest version of VS Code installed
3. **GitHub Copilot Extensions**: Install the following extensions:
   - GitHub Copilot (`github.copilot`)
   - GitHub Copilot Chat (`github.copilot-chat`)

## Setup Instructions

### 1. Open the Project in VS Code

You can open this project in VS Code in two ways:

**Option A: Open as Folder**
```bash
code /path/to/pinkbraescorts
```

**Option B: Open as Workspace (Recommended)**
```bash
code pinkbraescorts.code-workspace
```

### 2. Install Recommended Extensions

When you open the project, VS Code will prompt you to install recommended extensions. Click "Install All" or install them manually:

- GitHub Copilot
- GitHub Copilot Chat
- PHP Intelephense
- PHP IntelliSense

### 3. Sign in to GitHub Copilot

1. Open the Command Palette (`Ctrl+Shift+P` or `Cmd+Shift+P`)
2. Type "GitHub Copilot: Sign In"
3. Follow the authentication process

## Using "Ask to Agent" Feature

### Method 1: Command Palette
1. Open Command Palette (`Ctrl+Shift+P` / `Cmd+Shift+P`)
2. Type "GitHub Copilot Chat: Open Chat"
3. Use the chat interface to ask questions

### Method 2: Keyboard Shortcut
- Press `Ctrl+I` (Windows/Linux) or `Cmd+I` (Mac) to open inline chat
- Type your question and press Enter

### Method 3: Right-click Context Menu
1. Select code in the editor
2. Right-click and choose "Copilot: Ask Copilot"
3. Type your question about the selected code

### Method 4: Chat Panel
1. Open the Chat view in the sidebar (Activity Bar)
2. Type questions directly in the chat interface

## Common Use Cases

### Code Explanation
Select PHP code and ask: "Explain this function"

### Code Generation
Ask: "Generate a PHP function to validate email addresses"

### Debugging Help
Select problematic code and ask: "Why isn't this working?"

### Best Practices
Ask: "How can I improve this PHP code?"

## Troubleshooting

### "Ask to Agent" Not Working?

1. **Check Copilot Status**:
   - Look for the Copilot icon in the status bar
   - Ensure it shows "Copilot: Ready"

2. **Verify Extensions**:
   - Go to Extensions view (`Ctrl+Shift+X`)
   - Ensure GitHub Copilot and GitHub Copilot Chat are installed and enabled

3. **Check Settings**:
   - Open Settings (`Ctrl+,`)
   - Search for "copilot"
   - Ensure all Copilot features are enabled

4. **Restart VS Code**:
   - Close and reopen VS Code
   - Try opening the workspace file directly

5. **Check Authentication**:
   - Open Command Palette
   - Run "GitHub Copilot: Sign Out" then "GitHub Copilot: Sign In"

### Configuration Issues

If you're still having issues, check that these settings are enabled in your VS Code settings:

```json
{
    "github.copilot.enable": {
        "*": true,
        "php": true
    },
    "github.copilot.chat.enabled": true,
    "editor.inlineSuggest.enabled": true
}
```

## Project-Specific Configuration

This project includes:

- `.vscode/settings.json` - VS Code workspace settings with Copilot enabled
- `.vscode/extensions.json` - Recommended extensions list
- `.vscode/launch.json` - PHP debugging configuration
- `pinkbraescorts.code-workspace` - Workspace configuration file

## Support

If you continue to experience issues with the "Ask to Agent" feature:

1. Check the [GitHub Copilot documentation](https://docs.github.com/en/copilot)
2. Verify your GitHub Copilot subscription status
3. Try disabling and re-enabling the Copilot extensions
4. Check the VS Code Output panel for error messages (View > Output > GitHub Copilot)

## Tips for Better Results

- Be specific in your questions
- Provide context when asking about code
- Use proper terminology for PHP and web development
- Select relevant code before asking questions about it