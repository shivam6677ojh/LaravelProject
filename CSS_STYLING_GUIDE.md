# 🎨 YogaPlanner CSS Styling Guide

## Color Palette

### Primary Colors
- **Yoga Terracotta** (`yoga-*`): Warm, energetic color for primary actions
  - `yoga-500`: `#E8704A` (Main)
  - `yoga-100` to `yoga-900`: Full gradient scale

- **Zen Teal** (`zen-*`): Calm, peaceful color for secondary actions
  - `zen-400`: `#2DD4BF` (Main)
  - `zen-100` to `zen-900`: Full gradient scale

- **Sage Green** (`sage-*`): Natural, healing accent color
  - `sage-400`: `#6EE7B7` (Main)
  - `sage-100` to `sage-900`: Full gradient scale

---

## Component Classes

### Buttons
```html
<!-- Primary CTA Button -->
<button class="btn btn-primary">Click Me</button>

<!-- Secondary Calm Button -->
<button class="btn btn-secondary">Cancel</button>

<!-- Sage Green Button -->
<button class="btn btn-sage">Confirm</button>

<!-- Outline Button -->
<button class="btn btn-outline">Learn More</button>

<!-- Outline Zen Button -->
<button class="btn btn-outline-zen">Explore</button>

<!-- Button Sizes -->
<button class="btn btn-primary btn-sm">Small</button>
<button class="btn btn-primary">Medium (default)</button>
<button class="btn btn-primary btn-lg">Large</button>
```

### Cards
```html
<!-- Standard Card -->
<div class="card">
  <h3>Card Title</h3>
  <p>Card content here</p>
</div>

<!-- Glass Card (Frosted Glass Effect) -->
<div class="glass-card">
  <h3>Transparent Card</h3>
</div>

<!-- Primary Gradient Card -->
<div class="card-primary">
  <h3>Primary Styled</h3>
</div>

<!-- Secondary Gradient Card -->
<div class="card-secondary">
  <h3>Secondary Styled</h3>
</div>
```

### Badges
```html
<span class="badge badge-yoga">Yoga</span>
<span class="badge badge-zen">Zen</span>
<span class="badge badge-sage">Sage</span>
<span class="badge badge-success">Success</span>
<span class="badge badge-warning">Warning</span>
```

### Forms
```html
<input type="text" class="input" placeholder="Your name">
<textarea class="textarea" placeholder="Your message"></textarea>
```

### Navigation Links
```html
<a href="#" class="nav-link">Inactive Link</a>
<a href="#" class="nav-link active">Active Link</a>
```

### Badges & Status
```html
<!-- Active Status -->
<div class="status-active">Active</div>

<!-- Inactive Status -->
<div class="status-inactive">Inactive</div>
```

---

## Text Effects

### Gradient Text
```html
<!-- Yoga Gradient -->
<h1 class="text-gradient-yoga">Yoga Gradient Text</h1>

<!-- Cool Gradient -->
<h1 class="text-gradient-cool">Cool Gradient Text</h1>

<!-- Full Gradient -->
<p class="gradient-text">Full Beautiful Gradient</p>
```

### Section Headers
```html
<div class="section-header">
  <h2 class="section-title">Featured Plans</h2>
</div>
```

---

## Layout Classes

### Grid
```html
<!-- Responsive 3-column grid -->
<div class="grid-card">
  <div class="card">1</div>
  <div class="card">2</div>
  <div class="card">3</div>
</div>
```

### Gaps & Spacing
```html
<div class="gap-yoga">Content with generous spacing</div>
```

---

## Effects & Animations

### Hover Effects
```html
<!-- Lift Effect (scales and shadow) -->
<div class="card hover-lift">Hover to see effect</div>

<!-- Glow Effect -->
<div class="card hover-glow">Glowing hover</div>
```

### Animations
```html
<!-- Float Animation -->
<div class="animate-float">Floating element</div>

<!-- Fade In -->
<div class="fade-in">Fades in on load</div>

<!-- Slide Up -->
<div class="slide-in-up">Slides up on load</div>
```

---

## Utilities

### Shadows
```html
<!-- Yoga Shadows -->
<div class="shadow-yoga-light">Light shadow</div>
<div class="shadow-yoga-md">Medium shadow</div>
<div class="shadow-yoga-lg">Large shadow</div>

<!-- Zen Shadows -->
<div class="shadow-zen-light">Zen shadow</div>
```

### Backgrounds
```html
<!-- Gradient Backgrounds -->
<div class="bg-gradient-yoga">Yoga gradient background</div>
<div class="bg-gradient-warm">Warm gradient</div>
<div class="bg-gradient-cool">Cool gradient</div>
<div class="bg-gradient-natural">Natural gradient</div>

<!-- Backdrop -->
<div class="backdrop-yoga">Blurred backdrop with transparency</div>
```

### Text Effects
```html
<p class="text-shadow-yoga">Text with yoga shadow</p>
```

---

## Complete Example

```html
<div class="glass-card p-8 hover-lift">
  <div class="section-header">
    <h2 class="section-title">Yoga Plans</h2>
  </div>
  
  <div class="grid-card">
    <div class="card-primary">
      <h3 class="text-gradient-yoga">Morning Flow</h3>
      <p class="text-slate-600 mt-2">Start your day with energizing yoga</p>
      <button class="btn btn-primary mt-4">Learn More</button>
    </div>
    
    <div class="card-secondary">
      <h3 class="text-gradient-cool">Evening Calm</h3>
      <p class="text-slate-600 mt-2">Wind down with relaxing poses</p>
      <button class="btn btn-secondary mt-4">Learn More</button>
    </div>
    
    <div class="card">
      <h3 class="text-slate-900">Weekend Warrior</h3>
      <p class="text-slate-600 mt-2">Intense weekend yoga sessions</p>
      <button class="btn btn-sage mt-4">Learn More</button>
    </div>
  </div>
</div>
```

---

## Responsive Design

All components are fully responsive using Tailwind's breakpoints:
- `sm:` - 640px
- `md:` - 768px
- `lg:` - 1024px
- `xl:` - 1280px
- `2xl:` - 1536px

Example:
```html
<div class="grid-cols-1 md:grid-cols-2 lg:grid-cols-3">
  <!-- Responsive grid -->
</div>
```

---

## Customization

All colors are customizable in `tailwind.config.js`. To change the color scheme:

```javascript
colors: {
    yoga: {
        500: '#YOUR_COLOR',
        // ... other shades
    },
    zen: { /* ... */ },
    sage: { /* ... */ }
}
```

---

## Tips for Best Results

1. **Use Glass Cards** for modern, layered look
2. **Apply Gradients** to section titles for visual interest
3. **Hover Effects** make UI feel responsive and alive
4. **Consistent Spacing** using `gap-yoga` for consistent padding
5. **Button Hierarchy** - Primary actions use `btn-primary`, secondary use `btn-secondary`
6. **Status Indicators** use appropriate badges for clarity

---

## Browser Support

- Modern browsers (Chrome, Firefox, Safari, Edge)
- Uses CSS Grid, Flexbox, and CSS variables
- Includes backdrop-filter support

---

**Enjoy your beautiful, modern yoga platform! 🧘‍♀️✨**
