# SEO Action Plan — Excellent Movers and Packers

Goal: rank #1 for at least one local keyword. This document splits the work into
**(A) what is already done on the website (code)** and **(B) what you must do off-site**
(these off-site signals are ~55% of local ranking and cannot be done from code).

Ranking weight reference (2026 local SEO): Google Business Profile **32%**, on-page **19%**,
reviews **16%**, links **15%**, behavioural **8%**, citations **7%**.

---

## A. Done on the website (code) ✅

- Site-wide `MovingCompany` (LocalBusiness) + `WebSite` schema, per-page `BreadcrumbList`
  and `FAQPage` schema, `aggregateRating`, geo coordinates.
- Canonical tags on every page (home, services, FAQ, contact, areas, states).
- Favicon / touch icon + theme-color.
- 44 area landing pages (local) + 36 state landing pages (inter-state) with unique titles,
  H1s, content and schema — strong on-page relevance + internal linking.
- Global "Areas" + "States" link block on every page (internal links).
- `sitemap.xml` (91 URLs) + `robots.txt` (incl. AI crawlers) + `llms.txt` / `llm.txt`.
- NAP (Name/Address/Phone) is centralised in `areas/areas-data.php` → identical across the
  whole site (NAP consistency is critical for citations).

## ⚠️ One thing only you can finish in code

Open `areas/areas-data.php` → `emp_business()` → the `'socials'` array and paste your real
profile URLs once they exist (Google Business Profile, Facebook, Instagram, JustDial, etc.).
They automatically flow into the schema `sameAs` **and** the footer icons. Empty ones are hidden.

---

## B. Off-site — DO THESE IN ORDER (highest impact first)

### 1. Google Business Profile (GBP) — biggest single lever (32%)
1. Create/claim: https://business.google.com → add "Excellent Movers and Packers".
2. **Primary category:** `Mover` (a.k.a. "Moving company"). Secondary: `Packaging supply store`,
   `Storage facility`, `Transportation service`.
3. Use the EXACT NAP from `areas-data.php`:
   - Name: `Excellent Movers and Packers`
   - Phone: `+91 82955 88602`
   - Address: `S/O Tallewar Dammayya, D NO 3-19/5, Saniwada, Aganampudi, Visakhapatnam, AP 530046`
4. Set service area = Visakhapatnam + the localities in our `/areas/` list.
5. Add 15–20 real photos (team, trucks, packing, completed moves), hours, website link.
6. Verify (postcard/phone/video). Then post 1 GBP "update" per week.
7. Copy the GBP short link (g.page/...) into the `socials['google']` field.

### 2. Reviews — second lever (16%); recency + steady flow matters more than total
- Ask every customer for a Google review via the GBP "review link" (SMS/WhatsApp it right
  after the move). Target a **steady 2–4 new reviews per week**, not a one-time burst.
- Reply to every review (good and bad).

### 3. Local citations / business listings (citations 7% + they earn backlinks 15%)
Create listings with the **identical NAP**. Free India directories — do these first:
- Google Business Profile (above)
- Bing Places — https://www.bingplaces.com
- JustDial — https://www.justdial.com/freelisting
- Sulekha — https://www.sulekha.com
- IndiaMART — https://www.indiamart.com
- Yelp India, Hotfrog, Cylex, Tradeindia, Yellowpages.in, Asklaila, Grotal, Fundoodata
- Facebook Business Page + Instagram Business + a YouTube channel
- Practo/UrbanClap-style niche + Quikr/OLX services listings
Then paste each profile URL into `socials` so they link back and reinforce `sameAs`.

### 4. Submit & monitor
- Google Search Console → add property → submit `sitemap.xml` (you already have the
  verification file committed). Watch "Performance" for which keyword gains impressions.
- Bing Webmaster Tools → submit the same sitemap.

### 5. Earn a few real backlinks (links 15%) — quality over quantity
- List on local Vizag business blogs / news / association pages.
- Partner sites (real-estate agents, packaging suppliers) → mutual mention.
- A short "moving tips" blog post that other sites can cite. **Never buy link-farm links** —
  they get the domain penalised.

---

## C. The keyword to win first 🎯

Don't start with "packers and movers in Visakhapatnam" (high competition, dominated by
aggregators like NoBroker/Porter). Win an **easier long-tail first, then expand:**

**Primary target → `packers and movers in Aganampudi`** (and `...Gajuwaka`, `...Steel Plant`).
Why: your office is physically in Aganampudi (530046), so Google's *distance* signal favours
you, competition is low, and we already have dedicated pages
(`/areas/aganampudi`, `/areas/gajuwaka`, `/areas/steel-plant`).

To lock #1 for it: complete GBP (set Aganampudi as the address), get ~10 reviews mentioning
"Aganampudi/Gajuwaka", and the on-page work is already in place. This is realistically a
**few-weeks** win, unlike the city-wide head term.

Once you rank for the long-tails and have 30–50 steady reviews, push for the city term.
