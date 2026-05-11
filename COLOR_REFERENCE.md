# 🎨 YogaPlanner Visual Reference Card

## Color Palette Quick Reference

```
┌─────────────────────────────────────────────────────────────┐
│                    YOGA COLORS (Warm)                       │
│  Primary: #E8704A (Energetic Terracotta)                   │
│  ████████████████████████████████████████████████           │
│  RGB: 232, 112, 74 | HSL: 15°, 81%, 60%                   │
│  Usage: Primary CTAs, Active states, Highlights            │
└─────────────────────────────────────────────────────────────┘

┌─────────────────────────────────────────────────────────────┐
│                     ZEN COLORS (Cool)                       │
│  Primary: #2DD4BF (Calm Teal)                              │
│  ████████████████████████████████████████████████           │
│  RGB: 45, 212, 191 | HSL: 166°, 78%, 50%                  │
│  Usage: Secondary actions, Peaceful backgrounds            │
└─────────────────────────────────────────────────────────────┘

┌─────────────────────────────────────────────────────────────┐
│                   SAGE COLORS (Natural)                     │
│  Primary: #6EE7B7 (Healing Green)                          │
│  ████████████████████████████████████████████████           │
│  RGB: 110, 231, 183 | HSL: 160°, 75%, 67%                │
│  Usage: Success states, Positive actions                   │
└─────────────────────────────────────────────────────────────┘

┌─────────────────────────────────────────────────────────────┐
│                 GRADIENT COMBINATIONS                       │
│                                                             │
│  Warm → Cool Gradient:                                     │
│  ░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░          │
│  #E8704A ────────────→ #2DD4BF                             │
│                                                             │
│  Cool → Natural Gradient:                                  │
│  ░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░          │
│  #2DD4BF ────────────→ #6EE7B7                             │
│                                                             │
│  All Three Gradient:                                       │
│  ░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░          │
│  #E8704A ──→ #2DD4BF ──→ #6EE7B7                          │
└─────────────────────────────────────────────────────────────┘
```

---

## Button Styles

```
┌─ Primary Button ──────────────────────────────┐
│                                               │
│    ╔════════════════════════════════════╗    │
│    ║    Click Me                        ║    │
│    ╚════════════════════════════════════╝    │
│    .btn .btn-primary                         │
│    Background: Linear gradient warm          │
│    Hover: Shadow increase + Scale 1.05       │
└───────────────────────────────────────────────┘

┌─ Secondary Button ────────────────────────────┐
│                                               │
│    ╔════════════════════════════════════╗    │
│    ║    Browse                          ║    │
│    ╚════════════════════════════════════╝    │
│    .btn .btn-secondary                       │
│    Background: Linear gradient cool          │
│    Hover: Shadow increase + Scale 1.05       │
└───────────────────────────────────────────────┘

┌─ Sage Button ─────────────────────────────────┐
│                                               │
│    ╔════════════════════════════════════╗    │
│    ║    Confirm                         ║    │
│    ╚════════════════════════════════════╝    │
│    .btn .btn-sage                            │
│    Background: Linear gradient natural       │
│    Hover: Shadow increase + Scale 1.05       │
└───────────────────────────────────────────────┘

┌─ Outline Button ──────────────────────────────┐
│                                               │
│    ╔════════════════════════════════════╗    │
│    ║    Learn More                      ║    │
│    ╚════════════════════════════════════╝    │
│    .btn .btn-outline                         │
│    Border: yoga-500, Text: yoga-500          │
│    Hover: Background soft yoga-50            │
└───────────────────────────────────────────────┘
```

---

## Component Examples

### Card with Hover Effect
```
┌──────────────────────────────────────────────┐
│  🧘 Morning Flow                    ⏱️ 30 min│
├──────────────────────────────────────────────┤
│  By Sarah Johnson                            │
│                                              │
│  Start your day with energizing yoga poses   │
│  perfect for beginners and experienced...    │
│                                              │
│  📊 24 bookings                              │
│  ─────────────────────────────────────────   │
│  [✏️ Edit]           [📌 Book Plan]           │
└──────────────────────────────────────────────┘
↑ Hover: Lifts up with larger shadow
.glass-card .hover-lift
```

### Status Badges
```
Active:   ●—● Active       ← Pulsing green dot
Inactive: ●— Inactive      ← Static gray dot
Success:  ✅ Success       ← Green background
Warning:  ⚠️  Warning      ← Amber background
```

### Navigation Bar
```
╔══════════════════════════════════════════════════════════╗
║ 🧘 YogaPlanner  📊 Dashboard  🌅 Plans  💬 Chatbot 🎥  ║
║                                           👤 User ▼     ║
╚══════════════════════════════════════════════════════════╝
        ↑ Gradient: yoga-500 → zen-400
```

### Dashboard Stats
```
┌────────────────────┐  ┌────────────────────┐  ┌────────────────────┐
│                    │  │                    │  │                    │
│  Total Plans       │  │  My Bookings       │  │  Chat Activity     │
│  🧘                │  │  📅                │  │  💬                │
│      24            │  │       8            │  │       15           │
│                    │  │                    │  │                    │
└────────────────────┘  └────────────────────┘  └────────────────────┘
        ↑                       ↑                       ↑
      yoga                   cool                   yoga
    gradient               gradient                gradient
```

---

## Typography Hierarchy

```
┌─────────────────────────────────────────────────────────┐
│                                                         │
│  Section Title (text-gradient-yoga)                   │
│  ▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓            │
│  Large, bold, gradient text for main sections         │
│                                                         │
├─────────────────────────────────────────────────────────┤
│                                                         │
│  Heading Level 3 (text-slate-900)                     │
│  Clean, readable, professional                        │
│                                                         │
│  Regular paragraph text (text-slate-600)              │
│  Smaller, softer text for body content                │
│                                                         │
└─────────────────────────────────────────────────────────┘

Font: Outfit (rounded, friendly, modern)
Line-height: 1.5 (generous spacing)
Colors: Gradient for titles, Slate for body
```

---

## Spacing System

```
Component Spacing (Tailwind):
- Buttons: px-6 py-3 (24px × 12px)
- Cards: p-6 or p-8 (24px or 32px padding)
- Gaps: gap-6 (24px between items)
- Sections: py-12 (48px top/bottom)

Result: Generous, breathable layouts
```

---

## Effects & Animations

```
Hover Lift:      Card rises 4px, shadow increases
Hover Glow:      Card gets colored shadow (yoga-500)
Fade In:         Smooth opacity 0 → 1 (500ms)
Slide Up:        Smooth translateY from 16px (500ms)
Float:           Subtle up/down bounce (3s loop)
Pulse:           Dot pulses (active indicator)
```

---

## Responsive Breakpoints

```
Mobile (< 640px):
  - Single column layout
  - Touch-friendly buttons (py-3)
  - Optimized padding

Tablet (640px - 1024px):
  - Two columns
  - Balanced layout
  - Medium padding

Desktop (> 1024px):
  - Three columns
  - Full featured
  - Generous spacing
```

---

## Usage Patterns

### Best For Primary Actions:
```
.btn .btn-primary
- Sign up / Register
- Confirm bookings
- Save plans
```

### Best For Secondary Actions:
```
.btn .btn-secondary
- Browse all plans
- View details
- Explore options
```

### Best For Success/Positive Actions:
```
.btn .btn-sage
- Confirm actions
- Enable features
- Complete flows
```

### Best For Outline/Alternative:
```
.btn .btn-outline
- Cancel buttons
- Back navigation
- Optional actions
```

---

## Performance Optimizations

✅ Uses CSS transforms for smooth animations
✅ Backdrop-filter for glass effect (GPU accelerated)
✅ CSS variables for theming
✅ Minimal repaints/reflows
✅ 60fps animations throughout

---

## Browser Support

✅ Chrome 90+
✅ Firefox 88+
✅ Safari 14+
✅ Edge 90+
✅ Mobile browsers (iOS 14+, Android 12+)

---

## Customization Tips

### Change Primary Color:
Edit `tailwind.config.js` → `yoga-500` value

### Change Animations Speed:
Edit `app.css` → Update duration values

### Add Dark Mode:
Add `dark:` variants to components

### Adjust Spacing:
Use Tailwind spacing scale (p-2, p-4, p-6, etc.)

---

## Quick Copy-Paste Templates

### Full Page Card:
```html
<div class="glass-card p-8 hover-lift">
  <div class="section-header">
    <h2 class="section-title">Title</h2>
  </div>
  <p class="text-slate-600">Content here</p>
</div>
```

### Action Card:
```html
<div class="card">
  <h3 class="text-gradient-yoga">Heading</h3>
  <p class="text-slate-600 mt-2">Description</p>
  <button class="btn btn-primary mt-4">Action</button>
</div>
```

### Status Indicator:
```html
<div class="status-active">Online</div>
<div class="status-inactive">Offline</div>
```

---

## 🎯 Design Philosophy

✨ **Modern**: Contemporary patterns and trends
🎨 **Cohesive**: Consistent colors and spacing
⚡ **Fast**: Smooth 60fps animations
♿ **Accessible**: WCAG compliant colors
📱 **Responsive**: Works on all devices
💫 **Delightful**: Micro-interactions everywhere

---

**Built with love for your YogaPlanner project! 🧘‍♀️**
