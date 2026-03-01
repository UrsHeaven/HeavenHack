# JollyHack 🐾

> A terminal-aesthetic WordPress theme with CRT scanlines, code rain, and full Customizer support.

**Forked from [HeavenHack](https://github.com/UndefinedFlower/HeavenHack) by Urs Heaven.**

---

## ✨ Features

- **Terminal Aesthetic** — Dark CRT-inspired interface with scanlines, flicker effects, and monospace typography
- **Code Rain Background** — Animated background reminiscent of classic hacker movies
- **Post Thumbnails** — Featured image support on both archive and single post views, with hover zoom effects
- **Image Optimization** — Subtle contrast/brightness filter with neon glow on hover
- **Full Customizer Support** — Change header messages, footer text, widget borders, menu colors, and more from the WordPress Customizer
- **Gutenberg Compatible** — Block editor output styled to match the terminal aesthetic
- **Responsive Design** — Adapts to mobile and tablet with a column-stacked layout
- **Related Posts** — Automatically shows related posts from the same category on single post pages

## 📸 Preview

> **TODO:** Add screenshots here once the theme is deployed.

## 🚀 Installation

1. Download the theme as a `.zip` file from [Releases](https://github.com/UndefinedFlower/JollyHack/releases) or clone this repo
2. In WordPress, go to **Appearance → Themes → Add New → Upload Theme**
3. Upload the `.zip` file and activate
4. Go to **Appearance → Customize** to set up your header text, colors, and footer messages

## 🎛️ Customizer Options

| Option | Description |
|--------|-------------|
| Header Line 1 | First line of the header tagline |
| Header Line 2 | Second line of the header tagline |
| Footer Uptime | System uptime prefix text |
| Footer Protocol | Footer status message |
| Widget Border Color | Border color for sidebar widgets |
| Widget Background Color | Background color for sidebar widgets |
| Widget Title Color | Title color for sidebar widgets |
| Menu Link Color | Navigation link color |
| Menu Hover Background | Navigation hover background color |

## 📁 File Structure

```
JollyHack/
├── style.css          # Main stylesheet + theme header
├── functions.php      # Theme setup, widget registration, customizer
├── header.php         # Site header, branding, navigation
├── footer.php         # Site footer
├── index.php          # Blog post archive with thumbnails
├── single.php         # Single post with featured image + related posts
├── sidebar.php        # Widget sidebar
├── search.php         # Search results page
├── searchform.php     # Custom terminal-style search form
└── README.md          # This file
```

## 🔧 What Changed from HeavenHack

- **Image Filter** — Replaced aggressive grayscale/sepia/hue-rotate with subtle contrast/brightness adjustment
- **Post Thumbnails** — Added `the_post_thumbnail()` support to both archive and single post views
- **Hover Effects** — Neon glow on images and zoom effect on thumbnails
- **Theme Identity** — Rebranded as JollyHack v7.0
- **License** — GPL-2.0-or-later

## 📜 License

GPL-2.0-or-later. See [LICENSE](https://www.gnu.org/licenses/gpl-2.0.html) for details.

---

**Made with 🦊 by [Urs Heaven](https://ursheaven.github.io)**
