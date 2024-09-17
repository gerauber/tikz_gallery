\usepackage{tikz} 
\usepackage[compat=1.1.0]{tikz-feynman}
...
\begin{tikzpicture}[scale=1, every node/.style={transform shape}]
    \begin{feynman}
        \vertex (em) {\(e^-\)};
        \vertex[below=2cm of em] (ep) {\(e^+\)};
        \vertex[below right=1cm and 1cm of em] (m);
        \vertex[right=1cm of m] (m1);
        \vertex[right=3cm of ep] (mum) {\(\mu^+\)};
        \vertex[right=3cm of em] (mup) {\(\mu^-\)};
        \vertex[above right=0.6cm and 2.4cm of ep] (z1);
        \vertex[above right=0.4cm and 1.5cm of z1] (z2);
        \vertex[right=1.5cm of mum] (x1) {\(\bar{\nu}_\ell, \bar{\chi}\)};
        \vertex[right=1.5cm of mup] (x2) {\(\nu_\ell, \chi\)};

        \diagram* {
        (em) -- [fermion] (m) -- [fermion] (ep),
        (m) --[boson, edge label=\(\ \gamma^*\)] (m1),
        (mum) -- [fermion] (m1) -- [fermion] (mup),
        (z1) --[boson, edge label=\(\ Z'\)] (z2),
        (x1) -- [fermion] (z2) -- [fermion] (x2),
        %(bs) --[scalar, edge label=\(\ S\), quarter right] (lp),
        %(x1) -- [fermion] (lp) -- [fermion] (x2),
        };
    \end{feynman}
\end{tikzpicture}
\begin{tikzpicture}[scale=1, every node/.style={transform shape}]
    \begin{feynman}
        \vertex (em) {\(e^-\)};
        \vertex[below=2cm of em] (ep) {\(e^+\)};
        \vertex[below right=1cm and 1cm of em] (m);
        \vertex[right=1cm of m] (m1);
        \vertex[right=3cm of ep] (mum) {\(\mu^+\)};
        \vertex[right=3cm of em] (mup) {\(\mu^-\)};
        \vertex[above right=0.6cm and 2.4cm of ep] (z1);
        \vertex[above right=0.4cm and 1.5cm of z1] (z2);
        \vertex[right=1.5cm of mum] (x1) {\(\tau^+\)};
        \vertex[right=1.5cm of mup] (x2) {\(\tau^-\)};

        \diagram* {
        (em) -- [fermion] (m) -- [fermion] (ep),
        (m) --[boson, edge label=\(\ W^-\)] (m1),
        (mum) -- [fermion] (m1) -- [fermion] (mup),
        (z1) --[boson, edge label=\(\ Z'\)] (z2),
        (x1) -- [fermion] (z2) -- [fermion] (x2),
        %(bs) --[scalar, edge label=\(\ S\), quarter right] (lp),
        %(x1) -- [fermion] (lp) -- [fermion] (x2),
        };
    \end{feynman}
\end{tikzpicture}