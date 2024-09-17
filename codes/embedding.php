\usepackage{tkz-euclide}
\usepackage[compat=1.1.0]{tikz-feynman}
...
\begin{tikzpicture}[scale=0.8, every node/.style={transform shape}]
    \definecolor{bc}{HTML}{86ADFF}
    \definecolor{bf}{HTML}{317DE7}
    \definecolor{rc}{HTML}{FDC6BE}
    \definecolor{rf}{HTML}{C6281E}

    \tkzDefPoints{0/0/ip1, 2/0/e1, 0.5/1/t1, 0.5/2.2/nu1, 1/2.1/p1, 1.6/1.9/p2, 1.8/1.5/p3, -2/0/e2, -0.5/-1/t2, -0.8/-2/nu2, -1.5/-1.8/m2, -1/-1.8/c1}

    \def\valx{-2}
    \def\valy{2}

    \tkzDefPoint(-0.5+\valx,-1+\valy){t2_1}
    \tkzDefPoint(-0.8+\valx,-2+\valy){nu2_1}
    \tkzDefPoint(-1.5+\valx,-1.8+\valy){m2_1}
    \tkzDefPoint(-1+\valx,-1.8+\valy){c1_1}

    \filldraw[color=gray!80, fill=gray!10, very thick](c1) circle (0.98);
    \filldraw[color=rf!80, fill=rc!20, very thick](c1_1) circle (0.98);
    \draw[thick, -latex] (-2.1,-0.3) arc (110:-20:0.5);
    \draw[thick, -latex] (-2,-1.4) arc (290:150:0.5);

    \draw[draw=black, -latex, thick] (ip1) -- (t1);
    \draw[draw=black, -latex, dashed, thick] (t1) -- (nu1);
    \draw[draw=black, -latex, thick] (t1) -- (p1);
    \draw[draw=black, -latex, thick] (t1) -- (p2);
    \draw[draw=black, -latex, thick] (t1) -- (p3);
    \draw[draw=black, -latex, thick] (ip1) -- (t2);
    \draw[draw=black, -latex, dashed, thick] (t2) -- (nu2);
    \path [draw=black, -latex, thick] (t2) -- (m2);

    \draw[draw=black, -latex, dashed, thick] (t2_1) -- (nu2_1);
    \path [draw=black, -latex, thick] (t2_1) -- (m2_1);

    \node at (ip1) [circle,fill,fill=yellow!30,inner sep=3pt]{};
    \node at (ip1) [star,star points=10,fill=gray,inner sep=1.5pt] {};

    \tkzLabelPoint[right=-0.2cm, yshift=-0.4cm](t1){$\tau^+$}
    \tkzLabelPoint[right=-0.3cm, yshift=0.2cm](nu1){$\bar{\nu}_\tau$}
    \tkzLabelPoint[right=0cm, yshift=0.1cm](p1){$h^+$}%$\pi^+$}
    \tkzLabelPoint[right=0cm, yshift=0.1cm](p2){$h^-$}%$\pi^-$}
    \tkzLabelPoint[right=0cm, yshift=0cm](p3){$h^+$}%$\pi^+$}
    \tkzLabelPoint[right=-0.4cm, yshift=0.5cm](t2){$\tau^-$}
    \tkzLabelPoint[right=-0.2cm, yshift=-0.2cm](nu2){$\nu_\tau$}
    \tkzLabelPoint[right=-0.5cm, yshift=-0.2cm](m2){$K/\pi$}
    \tkzLabelPoint[right=-0.2cm, yshift=-0.2cm](nu2_1){$\nu_\tau$}
    \tkzLabelPoint[right=-0.5cm, yshift=-0.2cm](m2_1){$K$}
    \tkzLabelPoint[right=-0.5cm, yshift=1.3cm](c1_1){MC}
    \tkzLabelPoint[right=-1cm, yshift=-1.3cm](c1){data / MC}
    \tkzLabelPoint[right=0cm, yshift=-2cm](ip1){signal}
    \tkzLabelPoint[right=-0.5cm, yshift=2cm](ip1){tag}
\end{tikzpicture}
\begin{tikzpicture}[scale=0.8, every node/.style={transform shape}]
    \definecolor{bc}{HTML}{86ADFF}
    \definecolor{bf}{HTML}{317DE7}
    \definecolor{rc}{HTML}{FDC6BE}
    \definecolor{rf}{HTML}{C6281E}

    \tkzDefPoints{0/0/ip1, 2/0/e1, 0.5/1/t1, 0.5/2.2/nu1, 1/2.1/p1, 1.6/1.9/p2, 1.8/1.5/p3, -2/0/e2, -0.5/-1/t2, -0.8/-2/nu2, -1.5/-1.8/m2, -1/-1.8/c1}

    \def\valx{-2}
    \def\valy{2}

    \tkzDefPoint(-0.5+\valx,-1+\valy){t2_1}
    \tkzDefPoint(-0.8+\valx,-2+\valy){nu2_1}
    \tkzDefPoint(-1.5+\valx,-1.8+\valy){m2_1}
    \tkzDefPoint(-1+\valx,-1.8+\valy){c1_1}

    \filldraw[color=gray!80, fill=gray!10, very thick](c1) circle (0.98);
    \filldraw[color=bf!80, fill=bc!20, very thick](c1_1) circle (0.98);
    \draw[thick, -latex] (-2.1,-0.3) arc (110:-20:0.5);
    \draw[thick, -latex] (-2,-1.4) arc (290:150:0.5);

    \draw[draw=black, -latex, thick] (ip1) -- (t1);
    \draw[draw=black, -latex, dashed, thick] (t1) -- (nu1);
    \draw[draw=black, -latex, thick] (t1) -- (p1);
    \draw[draw=black, -latex, thick] (t1) -- (p2);
    \draw[draw=black, -latex, thick] (t1) -- (p3);
    \draw[draw=black, -latex, thick] (ip1) -- (t2);
    \draw[draw=black, -latex, dashed, thick] (t2) -- (nu2);
    \path [draw=black, -latex, thick] (t2) -- (m2);

    \draw[draw=black, -latex, dashed, thick] (t2_1) -- (nu2_1);
    \path [draw=black, -latex, thick] (t2_1) -- (m2_1);

    \node at (ip1) [circle,fill,fill=yellow!30,inner sep=3pt]{};
    \node at (ip1) [star,star points=10,fill=gray,inner sep=1.5pt] {};

    \tkzLabelPoint[right=-0.2cm, yshift=-0.4cm](t1){$\tau^+$}
    \tkzLabelPoint[right=-0.3cm, yshift=0.2cm](nu1){$\bar{\nu}_\tau$}
    \tkzLabelPoint[right=0cm, yshift=0.1cm](p1){$h^+$}%$\pi^+$}
    \tkzLabelPoint[right=0cm, yshift=0.1cm](p2){$h^-$}%$\pi^-$}
    \tkzLabelPoint[right=0cm, yshift=0cm](p3){$h^+$}%$\pi^+$}
    \tkzLabelPoint[right=-0.4cm, yshift=0.5cm](t2){$\tau^-$}
    \tkzLabelPoint[right=-0.2cm, yshift=-0.2cm](nu2){$\nu_\tau$}
    \tkzLabelPoint[right=-0.5cm, yshift=-0.2cm](m2){$K/\pi$}
    \tkzLabelPoint[right=-0.2cm, yshift=-0.2cm](nu2_1){$\nu_\tau$}
    \tkzLabelPoint[right=-0.5cm, yshift=-0.2cm](m2_1){$\pi$}
    \tkzLabelPoint[right=-0.5cm, yshift=1.3cm](c1_1){MC}
    \tkzLabelPoint[right=-1cm, yshift=-1.3cm](c1){data / MC}
    \tkzLabelPoint[right=0cm, yshift=-2cm](ip1){signal}
    \tkzLabelPoint[right=-0.5cm, yshift=2cm](ip1){tag}
\end{tikzpicture}