\usepackage{tikz}
\usepackage[compat=1.1.0]{tikz-feynman}
...
\begin{tikzpicture}
    \begin{feynman}[small]
        \vertex (c3) {\(\overline c\)};
        \vertex[below=2em of c3] (c1) {\(c\)};
        \vertex at ($(c3)!0.5!(c1) - (-1cm, 0)$) (c2);
        \vertex[right=3cm of c1] (l1) {\(\ell^{-} \)}; 
        \vertex[right=3cm of c3] (l3) {\(\ell^{+} \)}; 
        \vertex at ($(l1)!0.5!(l3) - (1cm, 0)$) (l2);

        \diagram* {
        (l3) -- [fermion] (l2) -- [fermion] (l1),
        (c1) -- [fermion] (c2) -- [fermion] (c3),
        (c2) -- [boson, edge label={$\gamma, \, Z^{0}$}] (l2),
        };

        \draw [decoration={brace}, decorate] (c1.south west) -- (c3.north west)
        node [pos=0.5, left] {\(J/\psi\) \textcolor{white}{.}};
    \end{feynman}
\end{tikzpicture}